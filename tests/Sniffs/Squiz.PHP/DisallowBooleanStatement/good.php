<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowBooleanStatement;

class GoodExample
{
	public function check(int $value): bool
	{
		if ($value > 0) {
			return true;
		}

		return false;
	}

	public function validate(string $input): bool
	{
		return $input !== '';
	}
}
