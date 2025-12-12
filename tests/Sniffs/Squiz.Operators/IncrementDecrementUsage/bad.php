<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Operators\IncrementDecrementUsage;

class BadExample
{

	public function process(): void
	{
		$counter = 0;

		// Increment/decrement used in larger expressions
		$value = $counter++;

		$result = ++$counter + 5;

		$total = $counter-- * 2;

		// Used in function call
		$this->doSomething($counter++);

		// Used in array access
		$array[$counter++] = 'value';
	}

	private function doSomething(int $value): void
	{
		// Method implementation
	}

}
