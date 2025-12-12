<?php declare(strict_types = 1);

// Using allowed functions - correct
$count = count([1, 2, 3]);
$value = rtrim('hello ');
$result = implode(',', ['a', 'b']);

// Using modern alternatives
$exists = array_key_exists('key', ['key' => 'value']);
