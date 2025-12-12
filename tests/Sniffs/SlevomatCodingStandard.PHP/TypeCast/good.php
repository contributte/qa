<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\TypeCast;

class GoodExample
{

	public function test(): void
	{
		$value = '123';

		$int = (int) $value;

		$float = (float) $value;

		$string = (string) 123;

		$bool = (bool) $value;
	}

}
