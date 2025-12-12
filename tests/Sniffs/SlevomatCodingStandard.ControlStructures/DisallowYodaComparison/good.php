<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowYodaComparison;

class GoodExample
{

	public function test(): void
	{
		$value = 5;

		if ($value === 5) {
			echo 'five';
		}

		if ($value !== null) {
			echo 'not null';
		}

		if ($value == 'test') {
			echo 'test';
		}

		if ($value > 10) {
			echo 'greater';
		}
	}

}
