<?php declare(strict_types = 1);

// Test: traversableTypeHints with Traversable
class Example
{

	/**
	 * @return Traversable<int>
	 */
	public function getItems(): Traversable
	{
		return new ArrayIterator([]);
	}

}
