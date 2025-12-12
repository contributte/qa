<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\OptimizedFunctionsWithoutUnpacking;

class BadExample
{

	public function test(): void
	{
		$arrays = [[1, 2], [3, 4]];

		$merged = array_merge(...$arrays);
	}

}
