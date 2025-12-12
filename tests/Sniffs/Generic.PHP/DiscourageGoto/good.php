<?php declare(strict_types = 1);

// Using structured control flow instead of goto - correct
function processData(array $data): void
{
	foreach ($data as $item) {
		if ($item === null) {
			continue;
		}
		echo $item;
	}
}
