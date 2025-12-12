<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Arrays\ArrayBracketSpacing;

class BadExample
{

	public function process(): void
	{
		$items = [1, 2, 3];
		$first = $items[ 0 ];
	}

}
