<?php declare(strict_types = 1);

// Test: complexity=5 - stricter warning threshold
function complexFunction1(int $a): int
{
	if ($a > 0) {
		if ($a > 10) {
			return 1;
		} elseif ($a > 5) {
			return 2;
		}
		return 3;
	} elseif ($a < 0) {
		return 4;
	}
	return 0;
}
