<?php declare(strict_types = 1);

// Valid PHP syntax - correct
function calculate(int $a, int $b): int
{
	return $a + $b;
}

$result = calculate(5, 10);
