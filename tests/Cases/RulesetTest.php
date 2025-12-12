<?php declare(strict_types = 1);

namespace Tests\Cases;

use Generator;
use Nette\Utils\Finder;
use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;
use Symfony\Component\Process\Process;
use Tests\Toolkit\Codesniffer;

class RulesetTest extends TestCase
{

	#[DataProvider('provideSets')]
	public function testRuleset(string $folder, string $snapshot): void
	{
		$process = new Process([
			'vendor/bin/phpcs',
			'--standard=' . $folder . '/ruleset.xml',
			'--report=json',
			'-q',
			$folder . '/Fixtures',
		]);
		$process->setWorkingDirectory(__DIR__ . '/../../');
		$process->run();

		$actual = Codesniffer::normalize(json_decode(trim($process->getOutput()), true) ?? []);
		$expected = json_decode(file_get_contents($snapshot), true);

		self::assertEquals($expected, $actual);
	}

	public static function provideSets(): Generator
	{
		$setsDir = __DIR__ . '/../Sets';

		if (!is_dir($setsDir)) {
			return;
		}

		foreach (Finder::findDirectories('*')->in($setsDir) as $setDir) {
			$folder = $setDir->getPathname();
			$snapshot = $folder . '/snapshot.json';

			if (file_exists($snapshot)) {
				yield basename($folder) => [$folder, $snapshot];
			}
		}
	}

}
