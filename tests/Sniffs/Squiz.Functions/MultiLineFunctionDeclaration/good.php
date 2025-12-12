<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\MultiLineFunctionDeclaration;

class GoodExample
{
	public function process(
		string $name,
		int $value,
		bool $force
	): void {
	}

	private function calculate(
		int $a,
		int $b,
		int $c
	): int {
		return $a + $b + $c;
	}

	protected function handle(
		array $data,
		bool $force = false
	): array {
		return $data;
	}
}
