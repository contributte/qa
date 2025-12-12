<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DiscouragedFunctions;

class GoodExample
{
	public function process(): void
	{
		$data = ['a', 'b', 'c'];
		$count = count($data);
		$encoded = json_encode($data);
	}
}
