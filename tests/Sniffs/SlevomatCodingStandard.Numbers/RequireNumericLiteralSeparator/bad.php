<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Numbers\RequireNumericLiteralSeparator;

class BadExample
{

	public function example(): void
	{
		$million = 1000000;
		$billion = 1000000000;
		$bytes = 0xFFFFFF;
		$binary = 0b1111000011110000;
	}

}
