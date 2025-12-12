<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Formatting\OperatorBracket;

class GoodExample
{

	public function process(int $a, int $b): int
	{
		$result = ($a + $b) * 2;

		$complex = (($a + $b) * ($b - $a)) / 2;

		return $result;
	}

}
