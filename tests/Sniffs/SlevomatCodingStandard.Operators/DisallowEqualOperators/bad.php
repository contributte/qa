<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\DisallowEqualOperators;

class BadExample
{

	public function test(): void
	{
		$a = 5;
		$b = '5';

		if ($a == 5) {
			echo 'equal';
		}

		if ($a != $b) {
			echo 'not equal';
		}
	}

}
