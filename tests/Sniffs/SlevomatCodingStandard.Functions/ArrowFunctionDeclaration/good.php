<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\ArrowFunctionDeclaration;

class GoodExample
{

	public function test(): void
	{
		$fn = fn (int $x): int => $x * 2;

		$add = fn (int $a, int $b): int => $a + $b;

		$items = [1, 2, 3];
		$doubled = array_map(fn (int $x): int => $x * 2, $items);
	}

}
