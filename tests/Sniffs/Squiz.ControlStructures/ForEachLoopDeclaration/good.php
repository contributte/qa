<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ForEachLoopDeclaration;

class GoodExample
{
	public function process(): void
	{
		$items = [1, 2, 3];
		$assoc = ['a' => 1, 'b' => 2];

		foreach ($items as $item) {
			// code
		}

		foreach ($items as $key => $value) {
			// code
		}

		foreach ($assoc as $key => $value) {
			// code
		}

		foreach ($items as &$item) {
			// code
		}

		foreach ($items as $key => &$value) {
			// code
		}

		foreach ($this->getItems() as $item) {
			// code
		}

		foreach ($this->getItems() as $key => $value) {
			// code
		}
	}

	private function getItems(): array
	{
		return [1, 2, 3];
	}
}
