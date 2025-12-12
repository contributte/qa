<?php declare(strict_types = 1);

// Low cyclomatic complexity - simple function
function simpleFunction($x)
{
	if ($x > 0) {
		return $x;
	}

	return 0;
}

function anotherSimple($value)
{
	return $value * 2;
}
