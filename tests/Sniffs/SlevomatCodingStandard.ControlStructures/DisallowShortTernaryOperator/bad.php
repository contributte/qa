<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowShortTernaryOperator;

class BadExample
{

	public function method(?string $value): string
	{
		return $value ?: 'default';
	}

	public function anotherMethod(int $number): int
	{
		return $number ?: 0;
	}

}
