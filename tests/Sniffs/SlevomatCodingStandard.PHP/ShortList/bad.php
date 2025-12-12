<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\ShortList;

class BadExample
{

	public function test(): void
	{
		$array = [1, 2, 3];

		list($a, $b, $c) = $array;

		list($first, , $third) = $array;
	}

}
