<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\UselessTernaryOperator;

class GoodExample
{

	public function test(int $value): bool
	{
		return $value > 0;
	}

	public function other(string $name): bool
	{
		return $name !== '';
	}

}
