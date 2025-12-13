<?php declare(strict_types = 1);

// Test: maxComplexity=10 - relaxed limit
function moderateFunction(int $a, int $b): int
{
	if ($a > 0) {
		if ($b > 0) {
			return 1;
		}
		return 2;
	}
	return 0;
}
