<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\DisallowArrowFunction;

class BadExample
{

	public function test(): void
	{
		$numbers = [1, 2, 3];
		$doubled = array_map(fn($n) => $n * 2, $numbers);
	}

}
