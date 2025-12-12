<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\ShortList;

class GoodExample
{

	public function test(): void
	{
		$array = [1, 2, 3];

		[$a, $b, $c] = $array;

		[$first, , $third] = $array;
	}

}
