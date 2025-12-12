<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowYodaComparison;

class BadExample
{

	public function test(): void
	{
		$value = 5;

		if (5 === $value) {
			echo 'five';
		}

		if (null !== $value) {
			echo 'not null';
		}

		if ('test' == $value) {
			echo 'test';
		}
	}

}
