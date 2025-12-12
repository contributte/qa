<?php declare(strict_types = 1);

namespace Tests\Cases;

use Generator;
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
			'--report=json',
			'-q',
			$file,
		]);
		$process->setWorkingDirectory(__DIR__ . '/../../');
		$process->run();

		$actual = Codesniffer::normalize(json_decode(trim($process->getOutput()), true) ?? []);
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
