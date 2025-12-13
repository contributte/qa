<?php declare(strict_types = 1);

// Test: linesCountBefore=1, linesCountAfter=1, jumpStatements=[continue,return,throw]
class Example
{

	public function test(bool $flag): int
	{
		if ($flag) {

			return 1;
		}

		$x = 1;

		return $x;
	}

}
