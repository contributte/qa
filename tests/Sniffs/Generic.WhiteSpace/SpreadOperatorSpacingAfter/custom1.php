<?php declare(strict_types = 1);

// Test: spacing=0 - no space after spread operator
function test(...$args): void
{
	$array = [...$args];
}
