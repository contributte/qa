<?php declare(strict_types = 1);

namespace Tests\Cases;

use Generator;
use Symfony\Component\Process\Process;
use Tester\Assert;
use Tester\TestCase;
use Tests\Toolkit\Codesniffer;

require_once __DIR__ . '/../bootstrap.php';

class RulesetTest extends TestCase
{

	/**
	 * @dataProvider provideSets
	 */
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

		Assert::equal($expected, $actual);
	}

	public function provideSets(): Generator
	{
		yield [__DIR__ . '/../Sets/8.0', __DIR__ . '/../Sets/8.0/snapshot.json'];
		yield [__DIR__ . '/../Sets/8.1', __DIR__ . '/../Sets/8.1/snapshot.json'];
		yield [__DIR__ . '/../Sets/8.2', __DIR__ . '/../Sets/8.2/snapshot.json'];
		yield [__DIR__ . '/../Sets/8.3', __DIR__ . '/../Sets/8.3/snapshot.json'];
		yield [__DIR__ . '/../Sets/8.4', __DIR__ . '/../Sets/8.4/snapshot.json'];
	}

}

(new RulesetTest())->run();
