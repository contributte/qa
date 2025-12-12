<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\RequireSingleLineCall;

class BadExample
{

	public function test(): void
	{
		$this->method(
			'a',
			'b'
		);
	}

	private function method(string $arg1, string $arg2): void
	{
	}

}
