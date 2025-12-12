<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\InnerFunctions;

class BadExample
{
	public function processData(array $data): array
	{
		function innerHelper(int $value): int
		{
			return $value * 2;
		}

		return array_map('innerHelper', $data);
	}

	public function anotherMethod(): void
	{
		function anotherInnerFunction(): string
		{
			return 'nested';
		}

		echo anotherInnerFunction();
	}
}
