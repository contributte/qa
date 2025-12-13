<?php declare(strict_types = 1);

// Test: absoluteNestingLevel=5 - stricter error threshold
function veryDeeplyNested(int $a): int
{
	if ($a > 0) {
		if ($a > 10) {
			if ($a > 20) {
				if ($a > 30) {
					if ($a > 40) {
						if ($a > 50) {
							return 1;
						}
					}
				}
			}
		}
	}
	return 0;
}
