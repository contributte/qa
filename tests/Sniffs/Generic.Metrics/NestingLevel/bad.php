<?php declare(strict_types = 1);

// High nesting level - too deeply nested
function deeplyNested($a, $b, $c, $d, $e)
{
	if ($a > 0) {
		if ($b > 0) {
			if ($c > 0) {
				if ($d > 0) {
					if ($e > 0) {
						return 1;
					}
				}
			}
		}
	}

	return 0;
}
