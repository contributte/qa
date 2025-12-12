<?php declare(strict_types = 1);

// Jumbled incrementers - inner loop modifies outer variable
for ($i = 0; $i < 10; $i++) {
	for ($j = 0; $j < 5; $j++) {
		$i++;  // Violation: modifying outer loop variable
		echo $i * $j;
	}
}

// Another jumbled case
for ($outer = 0; $outer < 10; $outer++) {
	for ($inner = 0; $inner < 5; $inner++) {
		$outer += 2;  // Violation: modifying outer variable
		process($outer, $inner);
	}
}
