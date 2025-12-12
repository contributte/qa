<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowTrailingMultiLineTernaryOperator;

class BadExample
{

	public function method(bool $condition): string
	{
		return $condition ?
			'true value' :
			'false value';
	}

}
