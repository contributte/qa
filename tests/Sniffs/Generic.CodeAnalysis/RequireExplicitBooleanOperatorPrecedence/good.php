<?php declare(strict_types = 1);

// Explicit parentheses in boolean operations - correct
if (($a && $b) || $c) {
	doSomething();
}

if ($x && ($y || $z)) {
	processData();
}

// Simple single operator - no parentheses needed
if ($a && $b) {
	test();
}

// Explicit grouping
$result = ($flag1 && $flag2) || ($flag3 && $flag4);
