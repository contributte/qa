<?php declare(strict_types = 1);

// Incorrect scope indentation
class Example
{

	public function test(): void
	{
		if (true) {
	$x = 1;

				if ($x === 1) {
			$y = 2;
		}
		}
	}

}
