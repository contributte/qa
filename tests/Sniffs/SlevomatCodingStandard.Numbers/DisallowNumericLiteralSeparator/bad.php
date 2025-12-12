<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Numbers\DisallowNumericLiteralSeparator;

class BadExample
{

	public function test(): void
	{
		$million = 1_000_000;

		$binary = 0b1111_1111;

		$hex = 0xFF_FF_FF;
	}

}
