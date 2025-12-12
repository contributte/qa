<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\FunctionDeclarationArgumentSpacing;

class BadExample
{
	public function process(string $name,int $value): void
	{
	}

	private function calculate(int $a,  int $b,int $c): int
	{
		return $a + $b + $c;
	}

	protected function handle(array $data,bool $force=false): array
	{
		return $data;
	}
}
