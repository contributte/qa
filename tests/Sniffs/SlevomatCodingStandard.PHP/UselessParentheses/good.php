<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\UselessParentheses;

class GoodExample
{

	public function example(): void
	{
		$result = 2 + 3 * 4;
		$bool = true && false;
		$complex = ($a + $b) * $c;
		$negative = -$value;

		if ($x > 5 && $y < 10) {
			// Complex condition
		}
	}

}
