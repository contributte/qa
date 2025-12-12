<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ForLoopDeclaration;

class BadExample
{
	public function process(): void
	{
		for($i = 0; $i < 10; $i++) {
			// code
		}

		for ($i = 0;$i < 10;$i++) {
			// code
		}

		for ($i = 0;  $i < 10;  $i++) {
			// code
		}

		for ($i = 0; $i < 10;  $i++) {
			// code
		}

		for ($i = 0;  $i < 10; $i++) {
			// code
		}

		for ($i = 0 ; $i < 10 ; $i++) {
			// code
		}

		for ($i = 0; $i < 10 ; $i++) {
			// code
		}

		for ($i=0; $i<10; $i++) {
			// code
		}

		for ($i = 0,$j = 0; $i < 10; $i++,$j++) {
			// code
		}

		for ($i = 0, $j = 0;$i < 10;$i++, $j++) {
			// code
		}

		for ( $i = 0; $i < 10; $i++ ) {
			// code
		}

		for ($i = 0; $i < 10; $i++)
		{
			// code
		}
	}
}
