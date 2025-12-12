<?php declare(strict_types = 1);

// High cyclomatic complexity - too many decision points
function complexFunction($a, $b, $c, $d, $e)
{
	if ($a > 0) {
		if ($b > 0) {
			if ($c > 0) {
				if ($d > 0) {
					if ($e > 0) {
						return 1;
					} elseif ($e < 0) {
						return 2;
					} else {
						return 3;
					}
				} elseif ($d < 0) {
					return 4;
				}
			} elseif ($c < 0) {
				return 5;
			}
		} elseif ($b < 0) {
			return 6;
		}
	} elseif ($a < 0) {
		return 7;
	}

	return 0;
}
