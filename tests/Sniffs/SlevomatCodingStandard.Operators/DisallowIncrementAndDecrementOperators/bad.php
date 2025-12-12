<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\DisallowIncrementAndDecrementOperators;

class BadExample
{

	public function example(): void
	{
		$i = 0;
		$i++;
		++$i;

		$j = 10;
		$j--;
		--$j;
	}

}
