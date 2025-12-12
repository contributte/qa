<?php declare(strict_types = 1);

// PSR-12 compliant - use short form type keywords

function test(bool $flag, int $count): bool
{
	return $flag;
}

class Test
{
	private bool $active;

	private int $counter;

	public function method(bool $param): int
	{
		return 1;
	}

	public function cast(mixed $value): int
	{
		return (int) $value;
	}
}
