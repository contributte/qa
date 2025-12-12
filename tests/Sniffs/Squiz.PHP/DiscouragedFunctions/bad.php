<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DiscouragedFunctions;

class BadExample
{
	public function process(): void
	{
		$data = ['a', 'b', 'c'];
		$count = sizeof($data);
		$value = delete($data[0]);
	}
}
