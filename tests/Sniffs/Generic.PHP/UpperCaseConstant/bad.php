<?php declare(strict_types = 1);

// Using lowercase true, false, null - violation
$value = true;
$flag = false;
$data = null;

if ($value === true && $flag === false) {
	$data = null;
}
