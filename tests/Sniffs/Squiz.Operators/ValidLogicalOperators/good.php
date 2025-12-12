<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Operators\ValidLogicalOperators;

class GoodExample
{

	public function process(): void
	{
		$a = true;
		$b = false;
		$c = true;

		// Using && and || operators
		if ($a && $b) {
			// Condition body
		}

		if ($a || $b) {
			// Condition body
		}

		// Complex conditions with && and ||
		if ($a && $b || $c) {
			// Condition body
		}

		// With parentheses
		if (($a && $b) || ($c && !$b)) {
			// Condition body
		}

		// In assignments
		$result = $a && $b;
		$outcome = $a || $b;
	}

}
