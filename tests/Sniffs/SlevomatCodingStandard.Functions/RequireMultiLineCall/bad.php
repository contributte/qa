<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\RequireMultiLineCall;

class BadExample
{

	public function test(): void
	{
		$this->method('arg1', 'arg2', 'arg3', 'arg4');
	}

	private function method(string $arg1, string $arg2, string $arg3, string $arg4): void
	{
	}

}
