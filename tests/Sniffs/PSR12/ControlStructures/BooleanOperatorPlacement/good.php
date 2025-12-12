<?php declare(strict_types = 1);

// PSR-12 compliant boolean operator placement - at beginning or end of line consistently

if (
	$condition1
	&& $condition2
	&& $condition3
) {
	// operators at beginning
}

if (
	$condition1 &&
	$condition2 &&
	$condition3
) {
	// operators at end
}

while (
	$condition1
	|| $condition2
	|| $condition3
) {
	// operators at beginning
}

$result = $a && $b;
