<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\DisallowNamedArguments;

class GoodExample
{

	public function test(): void
	{
		$this->method('value1', 'value2', 'value3');
	}

	private function method(string $arg1, string $arg2, string $arg3): void
	{
	}

}
