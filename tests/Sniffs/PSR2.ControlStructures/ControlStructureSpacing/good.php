<?php

namespace Tests\Sniffs\PSR2\ControlStructures\ControlStructureSpacing;

/**
 * Good control structure spacing - no spaces inside parentheses
 */
class GoodExample
{

	public function testIf(int $value): void
	{
		if ($value > 0) {
			echo 'positive';
		}
	}

	public function testWhile(int $count): void
	{
		while ($count > 0) {
			$count--;
		}
	}

	public function testFor(): void
	{
		for ($i = 0; $i < 10; $i++) {
			echo $i;
		}
	}

	public function testForeach(array $items): void
	{
		foreach ($items as $item) {
			echo $item;
		}
	}

	public function testSwitch(int $value): void
	{
		switch ($value) {
			case 1:
				echo 'one';
				break;
			default:
				echo 'other';
				break;
		}
	}

	public function testComplexCondition(int $a, int $b, int $c): bool
	{
		if ($a > 0 && $b < 10 && $c === 5) {
			return true;
		}

		return false;
	}

}
