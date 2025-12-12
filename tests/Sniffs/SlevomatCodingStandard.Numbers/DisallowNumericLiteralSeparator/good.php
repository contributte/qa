<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Numbers\DisallowNumericLiteralSeparator;

class GoodExample
{

	public function test(): void
	{
		$million = 1000000;

		$binary = 0b11111111;

		$hex = 0xFFFFFF;
	}

}
