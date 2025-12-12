<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\CommentedOutCode;

class GoodExample
{
	// This is a proper comment explaining the logic
	public function process(): void
	{
		$value = 10;

		// Calculate the result based on input
		$result = $value * 2;
	}
}
