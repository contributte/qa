<?php declare(strict_types = 1);

// Using uppercase constants - violations
$value = TRUE;
$empty = FALSE;
$nothing = NULL;

if ($value === True && $empty === False) {
	$result = Null;
}
