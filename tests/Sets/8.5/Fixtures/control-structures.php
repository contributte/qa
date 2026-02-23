<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

class ControlStructuresFixture
{

	public function test(): void
	{
		$a = 1;
		$b = null;

		// Yoda comparison - violation
		if (1 === $a) {
			echo 'test';
		}

		// else if instead of elseif - violation
		if ($a === 1) {
			echo 'one';
		} else if ($a === 2) {
			echo 'two';
		}

		// Missing null coalesce - violation
		$c = $b !== null ? $b : 'default';

		// Useless ternary - violation
		$d = $a === 1 ? true : false;

		// Continue without integer in switch - violation
		switch ($a) {
			case 1:
				continue;
			default:
				break;
		}

		// Missing blank line before return - violation
		$result = $a + 1;
		return;
	}

}
