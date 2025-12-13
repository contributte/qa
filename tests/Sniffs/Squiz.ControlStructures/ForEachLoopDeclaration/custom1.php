<?php declare(strict_types = 1);

// Test: requiredSpacesAfterOpen=0, requiredSpacesBeforeClose=0 - no spaces
$items = [1, 2, 3];
foreach ($items as $item) {
	echo $item;
}
