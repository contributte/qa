#!/usr/bin/env php
<?php declare(strict_types = 1);

$root = dirname(__DIR__);
$reportsDir = $root . '/.reports';
$sniffsRoot = $root . '/tests/Sniffs';

$phpcsOutput = [];
$exitCode = 0;
exec('vendor/bin/phpcs --standard=ruleset.xml -e 2>&1', $phpcsOutput, $exitCode);

if ($exitCode !== 0) {
	fwrite(STDERR, "Failed to list enabled sniffs.\n");
	fwrite(STDERR, implode("\n", $phpcsOutput) . "\n");
	exit($exitCode);
}

$enabledSniffs = [];
foreach ($phpcsOutput as $line) {
	if (preg_match('#^\s*([A-Z][A-Za-z0-9]*\.[A-Za-z0-9_]+\.[A-Za-z0-9_]+)\s*$#', $line, $matches) === 1) {
		$enabledSniffs[$matches[1]] = true;
	}
}
$enabledSniffs = array_keys($enabledSniffs);
sort($enabledSniffs);

$refDirectories = [];
$iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($sniffsRoot));
foreach ($iterator as $file) {
	if (!$file->isFile() || !str_ends_with($file->getFilename(), '.ruleset.xml')) {
		continue;
	}

	$content = file_get_contents($file->getPathname());
	if ($content === false) {
		continue;
	}

	if (preg_match_all('#<rule\s+ref="([^"]+)"#', $content, $matches) !== false) {
		foreach ($matches[1] as $ref) {
			if (!str_contains($ref, '.')) {
				continue;
			}

			$refDirectories[$ref] ??= [];
			$refDirectories[$ref][$file->getPath()] = true;
		}
	}
}

foreach ($refDirectories as &$directories) {
	$directories = array_keys($directories);
	sort($directories);
}
unset($directories);

if (!is_dir($reportsDir)) {
	mkdir($reportsDir, 0777, true);
}

$csvPath = $reportsDir . '/sniff-coverage-matrix.csv';
$summaryPath = $reportsDir . '/sniff-coverage-summary.md';

$rows = [];
foreach ($enabledSniffs as $sniff) {
	$directories = $refDirectories[$sniff] ?? [];
	$fixtures = [];
	$hasGood = false;
	$hasBad = false;
	$customCount = 0;

	foreach ($directories as $directory) {
		$phpFiles = glob($directory . '/*.php') ?: [];
		foreach ($phpFiles as $phpFile) {
			$fixtures[$phpFile] = true;
			$fileName = basename($phpFile);
			if ($fileName === 'good.php') {
				$hasGood = true;
			} elseif ($fileName === 'bad.php') {
				$hasBad = true;
			} elseif (str_starts_with($fileName, 'custom')) {
				$customCount++;
			}
		}
	}

	$rows[] = [
		'enabled_sniff' => $sniff,
		'has_tests' => count($directories) > 0,
		'fixture_count' => count($fixtures),
		'has_good' => $hasGood,
		'has_bad' => $hasBad,
		'custom_count' => $customCount,
		'directories' => implode(';', array_map(static fn(string $path): string => ltrim(str_replace($root, '', $path), '/'), $directories)),
	];
}

$csv = fopen($csvPath, 'wb');
if ($csv === false) {
	fwrite(STDERR, "Cannot open CSV report for writing: {$csvPath}\n");
	exit(1);
}

fputcsv($csv, ['enabled_sniff', 'has_tests', 'fixture_count', 'has_good', 'has_bad', 'custom_count', 'directories']);
foreach ($rows as $row) {
	fputcsv($csv, [
		$row['enabled_sniff'],
		$row['has_tests'] ? 'true' : 'false',
		(string) $row['fixture_count'],
		$row['has_good'] ? 'true' : 'false',
		$row['has_bad'] ? 'true' : 'false',
		(string) $row['custom_count'],
		$row['directories'],
	]);
}
fclose($csv);

$total = count($rows);
$tested = count(array_filter($rows, static fn(array $row): bool => $row['has_tests'] === true));
$missing = array_values(array_filter($rows, static fn(array $row): bool => $row['has_tests'] === false));
$weak = array_values(array_filter(
	$rows,
	static fn(array $row): bool => $row['has_tests'] === true && (!$row['has_good'] || !$row['has_bad'] || $row['fixture_count'] === 1)
));
$strong = count(array_filter(
	$rows,
	static fn(array $row): bool => $row['has_tests'] === true && $row['has_good'] && $row['has_bad'] && $row['custom_count'] > 0
));

$summary = [];
$summary[] = '# Sniff Coverage Summary';
$summary[] = '';
$summary[] = '- Total enabled sniffs: ' . $total;
$summary[] = '- With dedicated tests: ' . $tested;
$summary[] = '- Missing dedicated tests: ' . count($missing);
$summary[] = '- Weak examples: ' . count($weak);
$summary[] = '- Strong examples (good+bad+custom): ' . $strong;
$summary[] = '';

if ($missing !== []) {
	$summary[] = '## Missing';
	foreach ($missing as $row) {
		$summary[] = '- `' . $row['enabled_sniff'] . '`';
	}
	$summary[] = '';
}

if ($weak !== []) {
	$summary[] = '## Weak Examples';
	foreach ($weak as $row) {
		$summary[] = sprintf(
			'- `%s` (fixtures=%d, good=%s, bad=%s)',
			$row['enabled_sniff'],
			$row['fixture_count'],
			$row['has_good'] ? 'true' : 'false',
			$row['has_bad'] ? 'true' : 'false'
		);
	}
	$summary[] = '';
}

file_put_contents($summaryPath, implode("\n", $summary));

fwrite(STDOUT, "Generated {$csvPath}\n");
fwrite(STDOUT, "Generated {$summaryPath}\n");
