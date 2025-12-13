<?php declare(strict_types = 1);

// Test: spacing=1 - one space after spread operator
function test(... $args): void
{
	$array = [... $args];
}
