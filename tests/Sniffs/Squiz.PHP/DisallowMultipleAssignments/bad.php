<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowMultipleAssignments;

class BadExample
{
	public function assign(): void
	{
		$first = $second = $third = 0;
	}

	public function process(): void
	{
		$value = $result = $this->calculate();
	}

	private function calculate(): int
	{
		return 5;
	}
}
