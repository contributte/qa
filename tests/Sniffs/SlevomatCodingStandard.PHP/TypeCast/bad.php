<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\TypeCast;

class BadExample
{

	public function test(): void
	{
		$value = '123';

		$int = intval($value);

		$float = floatval($value);

		$string = strval(123);

		$bool = boolval($value);
	}

}
