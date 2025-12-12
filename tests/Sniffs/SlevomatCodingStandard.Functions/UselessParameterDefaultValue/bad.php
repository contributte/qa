<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\UselessParameterDefaultValue;

class BadExample
{

	public function test(string $optional = 'default', string $required): void
	{
	}

	public function another(int $a = 0, int $b): void
	{
	}

}
