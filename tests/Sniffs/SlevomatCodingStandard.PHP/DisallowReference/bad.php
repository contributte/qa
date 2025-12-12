<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\DisallowReference;

class BadExample
{

	public function test(): void
	{
		$value = 5;
		$reference = &$value;

		$array = [1, 2, 3];

		foreach ($array as &$item) {
			$item *= 2;
		}
	}

}
