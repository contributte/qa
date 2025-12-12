<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\RequireArrowFunction;

class GoodExample
{

	public function test(): void
	{
		$multiplier = 2;

		$fn = fn (int $x): int => $x * $multiplier;

		$items = [1, 2, 3];
		$doubled = array_map(fn (int $x): int => $x * 2, $items);

		$filtered = array_filter($items, fn (int $x): bool => $x > 1);
	}

}
