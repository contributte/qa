<?php declare(strict_types = 1);

// Test: controlStructures with if, for, foreach
class Example
{

	public function test(): void
	{
		$x = 1;

		if ($x === 1) {
			$x = 2;
		}

		for ($i = 0; $i < 10; $i++) {
			$x++;
		}

		foreach ([1, 2, 3] as $item) {
			echo $item;
		}
	}

}
