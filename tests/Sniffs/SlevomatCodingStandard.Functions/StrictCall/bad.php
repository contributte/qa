<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\StrictCall;

class BadExample
{

	public function test(): void
	{
		$haystack = [1, 2, 3];
		$needle = 2;

		$found = in_array($needle, $haystack);

		$key = array_search($needle, $haystack);
	}

}
