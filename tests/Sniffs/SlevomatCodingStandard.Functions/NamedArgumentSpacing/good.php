<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\NamedArgumentSpacing;

class GoodExample
{

	public function test(): void
	{
		$this->method(arg1: 'value1', arg2: 'value2');
	}

	private function method(string $arg1, string $arg2): void
	{
	}

}
