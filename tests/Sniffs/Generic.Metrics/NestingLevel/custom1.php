<?php declare(strict_types = 1);

// Test: nestingLevel=3 - stricter warning threshold
function deeplyNested(int $a): int
{
	if ($a > 0) {
		if ($a > 10) {
			if ($a > 20) {
				if ($a > 30) {
					return 1;
				}
			}
		}
	}
	return 0;
}
