<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowInlineIf;

class GoodExample
{
	public function getValue(bool $condition): string
	{
		if ($condition) {
			return 'yes';
		}

		return 'no';
	}

	public function calculate(int $value): int
	{
		if ($value > 0) {
			return $value * 2;
		}

		return 0;
	}
}
