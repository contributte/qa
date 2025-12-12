<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\LowercasePHPFunctions;

class BadExample
{
	public function processArray(array $data): int
	{
		return COUNT($data);
	}

	public function formatString(string $text): string
	{
		return StrToLower(TRIM($text));
	}

	public function checkType(mixed $value): bool
	{
		return IS_ARRAY($value) && Is_String($value[0] ?? null);
	}

	public function getJson(array $data): string
	{
		return JSON_ENCODE($data);
	}
}
