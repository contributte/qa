<?php declare(strict_types = 1);

// Proper error handling without @ operator - correct
try {
	$file = fopen('test.txt', 'r');
} catch (\Throwable $e) {
	// Handle error
}

$result = file_get_contents('data.json');
