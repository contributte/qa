<?php declare(strict_types = 1);

// Test: traversableTypeHints with Traversable
class Example
{

	/**
	 * @param Traversable<int> $items
	 */
	public function process(Traversable $items): void
	{
	}

}
