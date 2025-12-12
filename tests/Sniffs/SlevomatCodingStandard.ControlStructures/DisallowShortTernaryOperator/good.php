<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowShortTernaryOperator;

class GoodExample
{

	public function method(?string $value): string
	{
		return $value !== null ? $value : 'default';
	}

	public function anotherMethod(int $number): string
	{
		return $number > 0 ? 'positive' : 'negative';
	}

}
