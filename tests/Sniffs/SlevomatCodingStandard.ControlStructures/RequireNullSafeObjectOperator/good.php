<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullSafeObjectOperator;

class GoodExample
{

	public function method(?object $obj): ?string
	{
		return $obj?->value;
	}

	public function anotherMethod(?object $obj): ?int
	{
		return $obj?->count;
	}

}
