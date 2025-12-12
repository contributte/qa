<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowComparisonAssignment;

class BadExample
{
	public function process(): void
	{
		if (($value = 10) === 10) {
			$result = true;
		}
	}

	public function check(): bool
	{
		return ($data = $this->getData()) !== null;
	}

	private function getData(): ?array
	{
		return [];
	}
}
