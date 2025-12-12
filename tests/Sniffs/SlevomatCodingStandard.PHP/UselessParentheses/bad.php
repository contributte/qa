<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\UselessParentheses;

class BadExample
{

	public function example(): void
	{
		$result = (2 + 3) * 4;
		$bool = (true) && (false);
		$simple = ($value);
		$negative = (-$value);

		if (($x > 5)) {
			// Useless parentheses
		}
	}

}
