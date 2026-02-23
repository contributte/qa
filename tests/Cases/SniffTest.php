<?php declare(strict_types = 1);

namespace Tests\Cases;

use Generator;
use JsonException;
use Nette\Utils\Finder;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Tests\Toolkit\Codesniffer;

class SniffTest extends TestCase
{

	#[DataProvider('provideSniffs')]
	public function testSniff(string $file, string $ruleset, string $snapshot): void
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

	public static function provideSniffs(): Generator
	{
		$sniffsDir = __DIR__ . '/../Sniffs';

		if (!is_dir($sniffsDir)) {
			return;
		}

		foreach (Finder::findDirectories('*')->in($sniffsDir) as $categoryDir) {
			foreach (Finder::findDirectories('*')->in($categoryDir->getPathname()) as $sniffDir) {
				foreach (Finder::findFiles('*.php')->in($sniffDir->getPathname()) as $phpFile) {
					$baseName = $phpFile->getBasename('.php');
					$snapshotFile = $sniffDir->getPathname() . '/' . $baseName . '.snapshot.json';
					$rulesetFile = $sniffDir->getPathname() . '/' . $baseName . '.ruleset.xml';

					if (file_exists($snapshotFile) && file_exists($rulesetFile)) {
						$category = basename($categoryDir->getPathname());
						$sniff = basename($sniffDir->getPathname());
						$key = $category . '.' . $sniff . '/' . $baseName;
						yield $key => [$phpFile->getPathname(), $rulesetFile, $snapshotFile];
					}
				}
			}
		}
	}

}
