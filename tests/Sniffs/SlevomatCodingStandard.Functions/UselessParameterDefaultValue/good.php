<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\UselessParameterDefaultValue;

class GoodExample
{

	public function test(string $required, string $optional = 'default'): void
	{
	}

	public function another(int $a, int $b = 0, int $c = 0): void
	{
	}

}
