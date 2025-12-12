<?php declare(strict_types = 1);

// Using lowercase constants - correct
$value = true;
$empty = false;
$nothing = null;

if ($value === true && $empty === false) {
	$result = null;
}
