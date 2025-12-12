<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowNullSafeObjectOperator;

class BadExample
{

	public function method(?object $obj): ?string
	{
		return $obj?->value;
	}

}
