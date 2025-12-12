<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\InnerFunctions;

class GoodExample
{
	public function processData(array $data): array
	{
		return array_map(fn($item) => $item * 2, $data);
	}

	public function formatString(string $text): string
	{
		return strtoupper(trim($text));
	}
}

function helperFunction(int $value): int
{
	return $value * 2;
}
