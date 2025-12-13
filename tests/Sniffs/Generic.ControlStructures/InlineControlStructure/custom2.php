<?php declare(strict_types = 1);

// Test: error=false - inline control structures reported as warnings
if ($condition) {
	echo 'yes';
}
