<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\LowercaseDeclaration;

class BadExample
{

	public function process(int $value): void
	{
		IF ($value > 0) {
			echo 'positive';
		} ELSEIF ($value < 0) {
			echo 'negative';
		} ELSE {
			echo 'zero';
		}

		FOR ($i = 0; $i < 10; $i++) {
			echo $i;
		}

		FOREACH ([1, 2, 3] as $item) {
			echo $item;
		}

		WHILE ($value > 0) {
			$value--;
		}

		DO {
			$value++;
		} WHILE ($value < 10);

		SWITCH ($value) {
			CASE 1:
				echo 'one';
				BREAK;
			DEFAULT:
				echo 'other';
		}
	}

}
