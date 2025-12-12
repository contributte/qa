<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Operators\IncrementDecrementUsage;

class GoodExample
{

	public function process(): void
	{
		$counter = 0;

		// Increment/decrement on separate lines
		$counter++;
		$counter--;

		++$counter;
		--$counter;

		// Used in loops is acceptable
		for ($i = 0; $i < 10; $i++) {
			// Loop body
		}

		// Assignment on separate line
		$value = $counter;
		$counter++;
	}

}
