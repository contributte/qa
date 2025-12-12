<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\RequireOnlyStandaloneIncrementAndDecrementOperators;

class BadExample
{

	public function example(): void
	{
		$i = 0;
		$result = $i++;
		$result2 = ++$i;

		$j = 10;
		$result3 = $j--;
		$result4 = --$j;
	}

}
