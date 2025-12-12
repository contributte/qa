<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\UnusedParameter;

class BadExample
{

	public function test(string $arg1, string $arg2): void
	{
		echo $arg1;
	}

	public function testMultiple(string $name, int $value, bool $flag): string
	{
		return $name;
	}

}
