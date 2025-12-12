<?php declare(strict_types = 1);

// Using uppercase TRUE, FALSE, NULL - correct
$value = TRUE;
$flag = FALSE;
$data = NULL;

if ($value === TRUE && $flag === FALSE) {
	$data = NULL;
}
