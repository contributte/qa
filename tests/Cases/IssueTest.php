<?php declare(strict_types = 1);

namespace Tests\Cases;

use Generator;
use JsonException;
use Nette\Utils\Finder;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Tests\Toolkit\Codesniffer;

class IssueTest extends TestCase
{

	#[DataProvider('provideIssues')]
	public function testIssue(string $file, string $ruleset, string $snapshot): void
	{
		$process = new Process([
			'vendor/bin/phpcs',
			'--standard=' . $ruleset,
			'--runtime-set',
			'ignore_errors_on_exit',
			'1',
			'--runtime-set',
			'ignore_warnings_on_exit',
			'1',
			'--report=json',
			'-q',
			$file,
		]);
		$process->setWorkingDirectory(__DIR__ . '/../../');
		$process->run();
		self::assertSame(0, $process->getExitCode(), $process->getErrorOutput());

		try {
			$output = json_decode(trim($process->getOutput()), true, 512, JSON_THROW_ON_ERROR);
		} catch (JsonException $e) {
			self::fail('Failed to decode phpcs JSON output: ' . $e->getMessage());
		}

		self::assertIsArray($output);

		$actual = Codesniffer::normalize($output);
		$expected = json_decode(file_get_contents($snapshot), true);

		self::assertEquals($expected, $actual);
	}

	public static function provideIssues(): Generator
	{
		$issuesDir = __DIR__ . '/../Issue';

		if (!is_dir($issuesDir)) {
			return;
		}

		foreach (Finder::findDirectories('*')->in($issuesDir) as $issueDir) {
			foreach (Finder::findFiles('*.php')->in($issueDir->getPathname()) as $phpFile) {
				$baseName = $phpFile->getBasename('.php');
				$snapshotFile = $issueDir->getPathname() . '/' . $baseName . '.snapshot.json';
				$rulesetFile = $issueDir->getPathname() . '/' . $baseName . '.ruleset.xml';

				if (file_exists($snapshotFile) && file_exists($rulesetFile)) {
					$key = $issueDir->getBasename() . '/' . $baseName;
					yield $key => [$phpFile->getPathname(), $rulesetFile, $snapshotFile];
				}
			}
		}
	}

}
