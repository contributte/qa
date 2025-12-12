<?php declare(strict_types = 1);

// Missing explicit parentheses in mixed boolean operations - violation
if ($a && $b || $c) {
	doSomething();
}

if ($x && $y || $z) {
	processData();
}

// No explicit grouping
$result = $flag1 && $flag2 || $flag3 && $flag4;

// Mixed operators without parentheses
if ($a || $b && $c) {
	test();
}
