<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\DisallowIncrementAndDecrementOperators;

class GoodExample
{

	public function example(): void
	{
		$i = 0;
		$i = $i + 1;
		$i += 1;

		$j = 10;
		$j = $j - 1;
		$j -= 1;
	}

}
