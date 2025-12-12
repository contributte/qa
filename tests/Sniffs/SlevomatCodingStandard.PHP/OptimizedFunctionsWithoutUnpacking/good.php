<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\OptimizedFunctionsWithoutUnpacking;

class GoodExample
{

	public function test(): void
	{
		$array = [1, 2, 3, 4, 5];

		$count = count($array);

		$sum = array_sum($array);

		$keys = array_keys($array);
	}

}
