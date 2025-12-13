<?php declare(strict_types = 1);

// Test: allowOnly=first - operators at beginning of line
if (
	$condition1
	&& $condition2
	&& $condition3
) {
	return true;
}
