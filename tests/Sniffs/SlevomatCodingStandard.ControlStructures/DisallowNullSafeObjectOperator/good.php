<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowNullSafeObjectOperator;

class GoodExample
{

	public function method(?object $obj): ?string
	{
		if ($obj !== null) {
			return $obj->value;
		}

		return null;
	}

}
