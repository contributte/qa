<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\DisallowDirectMagicInvokeCall;

class BadExample
{

	public function test(): void
	{
		$callable = new class {
			public function __invoke(): string
			{
				return 'invoked';
			}
		};

		$result = $callable->__invoke();
	}

}
