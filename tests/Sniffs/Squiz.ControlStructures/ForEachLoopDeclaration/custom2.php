<?php declare(strict_types = 1);

// Test: requiredSpacesAfterOpen=1, requiredSpacesBeforeClose=1 - one space each
$items = [1, 2, 3];
foreach ( $items as $item ) {
	echo $item;
}
