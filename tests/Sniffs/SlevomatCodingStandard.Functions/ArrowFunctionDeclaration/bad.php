<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\ArrowFunctionDeclaration;

class BadExample
{

	public function test(): void
	{
		$fn = fn(int $x): int => $x * 2;

		$add = fn(int $a,int $b): int => $a + $b;
	}

}
