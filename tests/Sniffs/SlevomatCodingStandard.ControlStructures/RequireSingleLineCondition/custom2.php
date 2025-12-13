<?php declare(strict_types = 1);

// Test: maxLineLength=120 - longer conditions allowed on single line
class Example
{

	public function test(bool $veryLongConditionA, bool $veryLongConditionB, bool $veryLongConditionC): void
	{
		if ($veryLongConditionA && $veryLongConditionB && $veryLongConditionC) {
			echo 'all true';
		}
	}

}
