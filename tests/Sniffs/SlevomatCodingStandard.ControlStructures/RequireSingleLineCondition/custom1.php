<?php declare(strict_types = 1);

// Test: maxLineLength=70
class Example
{

	public function test(bool $a, bool $b): void
	{
		if ($a && $b) {
			echo 'both';
		}
	}

}
