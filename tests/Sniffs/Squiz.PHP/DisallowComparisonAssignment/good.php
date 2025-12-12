<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowComparisonAssignment;

class GoodExample
{
	public function process(): void
	{
		$value = 10;

		if ($value === 10) {
			$result = true;
		}
	}

	public function check(): bool
	{
		$data = $this->getData();

		return $data !== null;
	}

	private function getData(): ?array
	{
		return [];
	}
}
