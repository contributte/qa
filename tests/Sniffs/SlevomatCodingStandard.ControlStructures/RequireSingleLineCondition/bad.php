<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireSingleLineCondition;

class BadExample
{

	public function test(): void
	{
		$value = 5;
		$other = 10;

		if (
			$value === 5
			&& $other === 10
		) {
			echo 'match';
		}

		while (
			$value < 100
		) {
			$value++;
		}
	}

}
