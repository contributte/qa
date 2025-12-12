<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\StrictCall;

class GoodExample
{

	public function test(): void
	{
		$haystack = [1, 2, 3];
		$needle = 2;

		$found = in_array($needle, $haystack, true);

		$key = array_search($needle, $haystack, true);

		$keys = array_keys($haystack, $needle, true);
	}

}
