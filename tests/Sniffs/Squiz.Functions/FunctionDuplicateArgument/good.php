<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\FunctionDuplicateArgument;

class GoodExample
{

	public function process(int $value, string $name, bool $flag): void
	{
		echo $value;
		echo $name;
		echo $flag;
	}

	public function calculate(int $first, int $second, int $third): int
	{
		return $first + $second + $third;
	}

}
