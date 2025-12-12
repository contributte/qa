<?php declare(strict_types = 1);

// Function call in for loop test condition - violation
$array = getArray();
for ($i = 0; $i < count($array); $i++) {
	echo $array[$i];
}

// Multiple function calls
for ($i = 0; $i < getLimit(); $i++) {
	doSomething($i);
}

// Function call on each iteration
for ($i = 0; $i < strlen($string); $i++) {
	process($string[$i]);
}
