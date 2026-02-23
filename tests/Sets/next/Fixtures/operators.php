<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

class OperatorsFixture
{

	public function test(): void
	{
		$a = 1;
		$b = 2;

		// Equal operator instead of identical - violation
		if ($a == $b) {
			echo 'equal';
		}

		// Not equal instead of not identical - violation
		if ($a != $b) {
			echo 'not equal';
		}

		// Should use combined assignment - violation
		$a = $a + 1;

		// Logical operators AND/OR instead of &&/|| - violation
		if ($a > 0 AND $b > 0) {
			echo 'both positive';
		}

		if ($a > 0 OR $b > 0) {
			echo 'one positive';
		}

		// Numeric literal separator - violation
		$bigNumber = 1_000_000;
	}

}
