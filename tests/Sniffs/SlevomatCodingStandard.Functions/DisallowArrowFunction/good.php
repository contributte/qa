<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\DisallowArrowFunction;

class GoodExample
{

	public function test(): void
	{
		$numbers = [1, 2, 3];
		$doubled = array_map(function ($n) {
			return $n * 2;
		}, $numbers);
	}

}
