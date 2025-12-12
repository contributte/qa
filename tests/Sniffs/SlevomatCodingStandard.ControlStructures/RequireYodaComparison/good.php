<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireYodaComparison;

class GoodExample
{

	public function method(string $value, int $number): void
	{
		if ('test' === $value) {
			echo 'match';
		}

		if (0 === $number) {
			echo 'zero';
		}

		if (null === $value) {
			echo 'null';
		}
	}

}
