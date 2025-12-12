<?php declare(strict_types = 1);

// Using forbidden functions - violations
$size = sizeof([1, 2, 3]);
$value = chop('hello ');
$result = join(',', ['a', 'b']);

// More forbidden functions
$exists = key_exists('key', ['key' => 'value']);
$type = is_null($value);
$double = doubleval('3.14');
