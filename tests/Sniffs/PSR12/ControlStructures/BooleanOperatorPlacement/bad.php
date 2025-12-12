<?php declare(strict_types = 1);

// Bad - mixed operator placement

if (
	$condition1 &&
	$condition2
	&& $condition3
) {
	// inconsistent placement
}

while (
	$condition1 ||
	$condition2
	|| $condition3
) {
	// inconsistent placement
}
