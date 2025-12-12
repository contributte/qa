<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\CommentedOutCode;

class BadExample
{
	public function process(): void
	{
		$value = 10;

		// $oldValue = 5;
		// $result = $value + $oldValue;
		$result = $value * 2;
	}
}
