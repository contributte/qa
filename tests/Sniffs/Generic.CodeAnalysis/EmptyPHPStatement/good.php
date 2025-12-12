<?php declare(strict_types = 1);

// Valid statements - no empty semicolons
$value = 1;
$result = 2;

function test(): void
{
	$x = 1;
	$y = 2;
}

class TestClass
{
	public function method(): void
	{
		$a = 1;
		$b = 2;
	}
}
