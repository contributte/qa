<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\StaticClosure;

class BadExample
{

	public function test(): void
	{
		$fn = function (): int {
			return 42;
		};

		$arrow = fn (): int => 42;
	}

}
