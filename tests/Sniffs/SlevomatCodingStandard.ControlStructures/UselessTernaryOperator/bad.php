<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\UselessTernaryOperator;

class BadExample
{

	public function test(int $value): bool
	{
		return $value > 0 ? true : false;
	}

	public function other(string $name): bool
	{
		return $name !== '' ? true : false;
	}

}
