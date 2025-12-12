<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireMultiLineCondition;

class BadExample
{

	public function method(string $value, bool $flag, int $number): void
	{
		if ($value !== '' && $flag === true && $number > 0) {
			echo 'valid';
		}
	}

}
