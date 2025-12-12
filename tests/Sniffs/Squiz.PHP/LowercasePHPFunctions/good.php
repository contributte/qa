<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\LowercasePHPFunctions;

class GoodExample
{
	public function processArray(array $data): int
	{
		return count($data);
	}

	public function formatString(string $text): string
	{
		return strtolower(trim($text));
	}

	public function checkType(mixed $value): bool
	{
		return is_array($value) && is_string($value[0] ?? null);
	}

	public function getJson(array $data): string
	{
		return json_encode($data);
	}
}
