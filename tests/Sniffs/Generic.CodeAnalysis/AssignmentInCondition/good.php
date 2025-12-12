<?php declare(strict_types = 1);

// Comparisons in conditions - correct
$value = getValue();
if ($value !== null) {
	// Use value
}

$result = doSomething();
while ($result === true) {
	$result = doSomething();
}

// Pre-assignment, then comparison
$data = fetchData();
if ($data) {
	processData($data);
}
