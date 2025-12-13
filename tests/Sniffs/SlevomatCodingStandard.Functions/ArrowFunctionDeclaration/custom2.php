<?php declare(strict_types = 1);

// Test: allowMultiLine=true
namespace Tests\Sniffs\SlevomatCodingStandard\Functions\ArrowFunctionDeclaration;

class Example2
{

	public function test(): void
	{
		$fn = fn (int $x): int =>
			$x * 2;

		$complexFn = fn (int $a, int $b, int $c): int =>
			$a + $b + $c;
	}

}
