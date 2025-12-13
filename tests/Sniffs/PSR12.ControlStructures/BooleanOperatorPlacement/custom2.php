<?php declare(strict_types = 1);

// Test: allowOnly=last - operators at end of line
if (
	$condition1 &&
	$condition2 &&
	$condition3
) {
	return true;
}
