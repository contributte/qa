<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\DisallowNamedArguments;

class BadExample
{

	public function test(): void
	{
		$this->method(arg1: 'value1', arg2: 'value2', arg3: 'value3');
	}

	private function method(string $arg1, string $arg2, string $arg3): void
	{
	}

}
