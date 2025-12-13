<?php declare(strict_types = 1);

// Test: jumpStatements with break only
class Example
{

	public function test(int $x): void
	{
		switch ($x) {
			case 1:
				echo 'one';

				break;

			default:
				echo 'default';
		}
	}

}
