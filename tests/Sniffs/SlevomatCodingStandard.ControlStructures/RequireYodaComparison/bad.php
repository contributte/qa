<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireYodaComparison;

class BadExample
{

	public function method(string $value, int $number): void
	{
		if ($value === 'test') {
			echo 'match';
		}

		if ($number === 0) {
			echo 'zero';
		}

		if ($value === null) {
			echo 'null';
		}
	}

}
