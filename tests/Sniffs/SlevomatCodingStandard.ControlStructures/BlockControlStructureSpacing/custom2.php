<?php declare(strict_types = 1);

// Test: controlStructures with try, switch
class Example
{

	public function test(): void
	{
		$x = 1;

		try {
			$x = 2;
		} catch (Exception $e) {
		}

		switch ($x) {
			case 1:
				break;
		}
	}

}
