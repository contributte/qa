<?php declare(strict_types = 1);

// Test: ignoreNewlines=true - newlines allowed in chained calls
$result = $object
	->method1()
	->method2();
