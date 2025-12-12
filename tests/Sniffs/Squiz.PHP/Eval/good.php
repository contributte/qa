<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\Eval;

class GoodExample
{
	public function execute(string $code): void
	{
		// Use proper parsing and execution methods
		$callable = function (): void {
			echo 'Hello';
		};

		$callable();
	}

	public function process(array $data): array
	{
		return array_map(fn($item) => $item * 2, $data);
	}
}
