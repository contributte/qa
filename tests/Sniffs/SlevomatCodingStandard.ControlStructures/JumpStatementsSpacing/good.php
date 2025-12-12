<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\JumpStatementsSpacing;

class GoodExample
{

	public function testReturn(): int
	{
		$value = 5;

		return $value;
	}

	public function testContinue(): void
	{
		$items = [1, 2, 3];

		foreach ($items as $item) {
			if ($item === 2) {
				continue;
			}

			echo $item;
		}
	}

	public function testBreak(): void
	{
		$items = [1, 2, 3];

		foreach ($items as $item) {
			if ($item === 2) {
				break;
			}

			echo $item;
		}
	}

	public function testThrow(): void
	{
		$value = null;

		if ($value === null) {
			throw new \RuntimeException('Value is null');
		}
	}

}
