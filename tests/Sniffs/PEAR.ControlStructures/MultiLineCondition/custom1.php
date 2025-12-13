<?php declare(strict_types = 1);

// Test: indent=4 - 4 space indentation for multi-line conditions
if ($condition1
    && $condition2
    && $condition3
) {
	echo 'yes';
}
