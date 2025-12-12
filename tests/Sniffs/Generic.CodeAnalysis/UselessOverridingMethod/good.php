<?php declare(strict_types = 1);

// Base class
class BaseClass
{
	public function method(string $param): string
	{
		return 'base: ' . $param;
	}

	public function calculate(int $a, int $b): int
	{
		return $a + $b;
	}
}

// Child class with meaningful overrides - correct
class ChildClass extends BaseClass
{
	public function method(string $param): string
	{
		// Adds additional logic
		$param = strtoupper($param);
		return parent::method($param);
	}

	public function calculate(int $a, int $b): int
	{
		// Different implementation
		return $a * $b;
	}
}
