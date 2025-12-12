<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowBooleanStatement;

class BadExample
{
	public function check(int $value): void
	{
		$value > 0;
	}

	public function validate(string $input): void
	{
		$input !== '';
	}
}
