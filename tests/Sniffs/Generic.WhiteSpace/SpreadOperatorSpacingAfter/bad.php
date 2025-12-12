<?php declare(strict_types = 1);

// Incorrect spacing after spread operator
function test(int ... $numbers): void
{
	$sum = array_sum($numbers);
}

$array1 = [1, 2, 3];
$array2 = [... $array1, 4, 5];

function call(): void
{
	$args = [1, 2, 3];
	test(... $args);
}
