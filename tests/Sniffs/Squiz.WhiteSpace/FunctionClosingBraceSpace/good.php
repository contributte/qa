<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\FunctionClosingBraceSpace;

class GoodExample
{
	public function methodOne(): void
	{
		$value = true;
	}

	public function methodTwo(): int
	{
		return 42;
	}
}
