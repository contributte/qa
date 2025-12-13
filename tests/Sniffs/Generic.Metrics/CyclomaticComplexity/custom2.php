<?php declare(strict_types = 1);

// Test: absoluteComplexity=15 - stricter error threshold
function veryComplexFunction(int $a, int $b): int
{
	if ($a > 0) {
		if ($a > 10) {
			if ($b > 0) {
				return 1;
			} elseif ($b > 5) {
				return 2;
			} else {
				return 3;
			}
		} elseif ($a > 5) {
			if ($b < 0) {
				return 4;
			}
			return 5;
		}
		return 6;
	} elseif ($a < 0) {
		if ($b > 0) {
			return 7;
		} elseif ($b < 0) {
			return 8;
		}
		return 9;
	}
	return 0;
}
