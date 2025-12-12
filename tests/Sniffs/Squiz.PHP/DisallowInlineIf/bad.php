<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowInlineIf;

class BadExample
{
	public function getValue(bool $condition): string
	{
		return $condition ? 'yes' : 'no';
	}

	public function calculate(int $value): int
	{
		return $value > 0 ? $value * 2 : 0;
	}
}
