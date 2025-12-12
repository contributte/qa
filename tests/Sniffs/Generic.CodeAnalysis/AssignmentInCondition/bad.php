<?php declare(strict_types = 1);

// Assignments in conditions - violation
if ($value = getValue()) {
	// Use value
}

while ($result = doSomething()) {
	// Process result
}

// Assignment in condition
if (($data = fetchData()) !== null) {
	processData($data);
}
