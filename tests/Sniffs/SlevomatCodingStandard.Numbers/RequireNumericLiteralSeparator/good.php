<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Numbers\RequireNumericLiteralSeparator;

class GoodExample
{

	public function example(): void
	{
		$million = 1_000_000;
		$billion = 1_000_000_000;
		$bytes = 0xFF_FF_FF;
		$binary = 0b1111_0000_1111_0000;
		$small = 999; // Under threshold
	}

}
