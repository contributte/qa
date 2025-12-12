<?php declare(strict_types = 1);

// Using goto - violation
function processData(array $data): void
{
	foreach ($data as $item) {
		if ($item === null) {
			goto end;
		}
		echo $item;
	}

	end:
	echo 'Done';
}
