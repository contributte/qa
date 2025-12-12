<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\RequireArrowFunction;

class BadExample
{

	public function test(): void
	{
		$multiplier = 2;

		$fn = function (int $x) use ($multiplier): int {
			return $x * $multiplier;
		};

		$items = [1, 2, 3];
		$doubled = array_map(function (int $x): int {
			return $x * 2;
		}, $items);
	}

}
