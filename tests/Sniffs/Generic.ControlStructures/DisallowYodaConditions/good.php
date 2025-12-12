<?php declare(strict_types = 1);

$value = 5;

// Normal condition (variable on left)
if ($value === 10) {
	echo 'correct';
}

if ($value !== null) {
	echo 'not null';
}
