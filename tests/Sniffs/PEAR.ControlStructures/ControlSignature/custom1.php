<?php declare(strict_types = 1);

// Test: ignoreComments=true - comments in control structures ignored
if ($condition) {
	// comment here
	echo 'yes';
}
