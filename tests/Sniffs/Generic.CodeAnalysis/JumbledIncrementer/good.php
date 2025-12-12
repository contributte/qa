<?php declare(strict_types = 1);

// Correct incrementers - no jumbling
for ($i = 0; $i < 10; $i++) {
	for ($j = 0; $j < 5; $j++) {
		echo $i * $j;
	}
}

// Proper nested loop incrementers
for ($outer = 0; $outer < 10; $outer++) {
	for ($inner = 0; $inner < 5; $inner++) {
		process($outer, $inner);
	}
}

// Single loop
for ($k = 0; $k < 20; $k++) {
	doSomething($k);
}
