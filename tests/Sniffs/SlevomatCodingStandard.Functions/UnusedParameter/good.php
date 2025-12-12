<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\UnusedParameter;

class GoodExample
{

	public function test(string $arg1, string $arg2): void
	{
		echo $arg1;
		echo $arg2;
	}

	public function testAll(string $name, int $value): string
	{
		return $name . (string) $value;
	}

}
