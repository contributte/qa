<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\LogicalOperatorSpacing;

class GoodExample
{
	public function process(): void
	{
		if ($a && $b) {
			$this->execute();
		}

		if ($x || $y) {
			$this->run();
		}

		$result = $condition1 && $condition2 && $condition3;
		$check = $flag1 || $flag2 || $flag3;
	}
}
