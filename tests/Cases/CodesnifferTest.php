<?php declare(strict_types = 1);

namespace Tests\Cases;

use PHPUnit\Framework\TestCase;
use Tests\Toolkit\Codesniffer;

class CodesnifferTest extends TestCase
{

	public function testNormalizeKeepsBaseNameForUniqueFiles(): void
	{
		$normalized = Codesniffer::normalize([
			'totals' => ['errors' => 0, 'warnings' => 0],
			'files' => [
				'/tmp/alpha.php' => [
					'errors' => 0,
					'warnings' => 0,
					'messages' => [],
				],
			],
		]);

		self::assertArrayHasKey('alpha.php', $normalized['files']);
		self::assertArrayNotHasKey('alpha.php#1', $normalized['files']);
	}

	public function testNormalizeKeepsDuplicateBasenamesUnique(): void
	{
		$normalized = Codesniffer::normalize([
			'totals' => ['errors' => 2, 'warnings' => 0],
			'files' => [
				'/tmp/a/duplicate.php' => [
					'errors' => 1,
					'warnings' => 0,
					'messages' => [],
				],
				'/tmp/b/duplicate.php' => [
					'errors' => 1,
					'warnings' => 0,
					'messages' => [],
				],
			],
		]);

		self::assertSame(['duplicate.php#1', 'duplicate.php#2'], array_keys($normalized['files']));
		self::assertSame(1, $normalized['files']['duplicate.php#1']['errors']);
		self::assertSame(1, $normalized['files']['duplicate.php#2']['errors']);
	}

}
