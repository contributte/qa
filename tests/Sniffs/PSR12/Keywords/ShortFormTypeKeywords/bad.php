<?php declare(strict_types = 1);

// Bad - use long form type keywords

function test(boolean $flag, integer $count): boolean
{
	return $flag;
}

class Test
{
	private boolean $active;

	private integer $counter;

	public function method(boolean $param): integer
	{
		return 1;
	}

	public function cast(mixed $value): integer
	{
		return (integer) $value;
	}
}
