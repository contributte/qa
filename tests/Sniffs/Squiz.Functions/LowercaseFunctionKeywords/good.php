<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\LowercaseFunctionKeywords;

class GoodExample
{

	public function process(): void
	{
		$callback = function (int $value): int {
			return $value * 2;
		};

		$arrow = fn(int $x): int => $x * 3;
	}

	private static function calculate(): int
	{
		return 42;
	}

}

function globalFunction(): void
{
	echo 'test';
}
