<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\LowercaseFunctionKeywords;

class BadExample
{

	public FUNCTION process(): void
	{
		$callback = FUNCTION (int $value): int {
			return $value * 2;
		};

		$arrow = FN(int $x): int => $x * 3;
	}

	private static FUNCTION calculate(): int
	{
		return 42;
	}

}

FUNCTION globalFunction(): void
{
	echo 'test';
}
