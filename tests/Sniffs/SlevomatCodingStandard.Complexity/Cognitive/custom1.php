<?php declare(strict_types = 1);

// Test: maxComplexity=5 - stricter limit
function simpleFunction(int $a): int
{
	if ($a > 0) {
		return 1;
	}
	return 0;
}
