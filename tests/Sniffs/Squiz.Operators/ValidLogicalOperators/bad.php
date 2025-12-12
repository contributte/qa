<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Operators\ValidLogicalOperators;

class BadExample
{

	public function process(): void
	{
		$a = true;
		$b = false;
		$c = true;

		// Using 'and' instead of &&
		if ($a and $b) {
			// Condition body
		}

		// Using 'or' instead of ||
		if ($a or $b) {
			// Condition body
		}

		// Mixed usage
		if ($a and $b or $c) {
			// Condition body
		}

		// In assignments
		$result = $a and $b;
		$outcome = $a or $b;
	}

}
