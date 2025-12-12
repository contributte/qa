<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\FunctionDuplicateArgument;

class BadExample
{

	public function process(int $value, string $value, bool $flag): void
	{
		echo $value;
		echo $flag;
	}

	public function calculate(int $first, int $second, int $first): int
	{
		return $first + $second;
	}

}
