<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\GlobalKeyword;

$globalCounter = 0;

class BadExample
{
	public function increment(): void
	{
		global $globalCounter;
		$globalCounter++;
	}

	public function decrement(): void
	{
		global $globalCounter;
		$globalCounter--;
	}
}
