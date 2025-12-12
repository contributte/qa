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

// Child class with useless overrides - violation
class ChildClass extends BaseClass
{
	// Useless: just calls parent with same parameters
	public function method(string $param): string
	{
		return parent::method($param);
	}

	// Useless: just calls parent with same parameters
	public function calculate(int $a, int $b): int
	{
		return parent::calculate($a, $b);
	}
}
