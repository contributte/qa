<?php declare(strict_types = 1);

// Low nesting level - acceptable
function lowNesting($x, $y)
{
	if ($x > 0) {
		if ($y > 0) {
			return $x + $y;
		}
	}

	return 0;
}

function simpleFunction($value)
{
	if ($value > 0) {
		return $value;
	}

	return 0;
}
