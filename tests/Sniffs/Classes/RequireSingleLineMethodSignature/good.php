<?php declare(strict_types = 1);

class Calculator
{

	public function add(int $a, int $b): int
	{
		return $a + $b;
	}

	public function multiply(float $x, float $y): float
	{
		return $x * $y;
	}

	public function getValue(): string
	{
		return 'value';
	}

}
