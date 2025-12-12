<?php declare(strict_types = 1);

$value = 5;

// Yoda condition (constant on left)
if (10 === $value) {
	echo 'yoda';
}

if (null !== $value) {
	echo 'yoda style';
}
