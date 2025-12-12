<?php

namespace Tests\Sniffs\PSR2\ControlStructures\ControlStructureSpacing;

/**
 * Bad control structure spacing - spaces inside parentheses
 */
class BadExample
{

	public function testIf(int $value): void
	{
		if ( $value > 0 ) {
			echo 'positive';
		}
	}

	public function testWhile(int $count): void
	{
		while ( $count > 0 ) {
			$count--;
		}
	}

	public function testFor(): void
	{
		for ( $i = 0; $i < 10; $i++ ) {
			echo $i;
		}
	}

	public function testForeach(array $items): void
	{
		foreach ( $items as $item ) {
			echo $item;
		}
	}

	public function testSwitch(int $value): void
	{
		switch ( $value ) {
			case 1:
				echo 'one';
				break;
			default:
				echo 'other';
				break;
		}
	}

	public function testMixed(int $a, int $b): void
	{
		// Space after opening parenthesis
		if ( $a > 0) {
			echo 'a positive';
		}

		// Space before closing parenthesis
		if ($b > 0 ) {
			echo 'b positive';
		}
	}

}
