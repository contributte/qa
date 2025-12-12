<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowMultipleAssignments;

class GoodExample
{
	public function assign(): void
	{
		$first = 10;
		$second = 20;
		$third = 30;
	}

	public function process(): void
	{
		$value = $this->calculate();
		$result = $value * 2;
	}

	private function calculate(): int
	{
		return 5;
	}
}
