<?php declare(strict_types = 1);

// Function call result cached before loop - correct
$array = getArray();
$count = count($array);
for ($i = 0; $i < $count; $i++) {
	echo $array[$i];
}

// Simple variable comparison
$limit = 10;
for ($i = 0; $i < $limit; $i++) {
	doSomething($i);
}

// Literal value
for ($i = 0; $i < 100; $i++) {
	process($i);
}
