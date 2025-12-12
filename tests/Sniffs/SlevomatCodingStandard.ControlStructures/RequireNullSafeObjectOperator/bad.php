<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullSafeObjectOperator;

class BadExample
{

	public function method(?object $obj): ?string
	{
		if ($obj !== null) {
			return $obj->value;
		}

		return null;
	}

	public function anotherMethod(?object $obj): ?int
	{
		return $obj !== null ? $obj->count : null;
	}

}
