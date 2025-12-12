<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\LowercaseDeclaration;

class GoodExample
{

	public function process(int $value): void
	{
		if ($value > 0) {
			echo 'positive';
		} elseif ($value < 0) {
			echo 'negative';
		} else {
			echo 'zero';
		}

		for ($i = 0; $i < 10; $i++) {
			echo $i;
		}

		foreach ([1, 2, 3] as $item) {
			echo $item;
		}

		while ($value > 0) {
			$value--;
		}

		do {
			$value++;
		} while ($value < 10);

		switch ($value) {
			case 1:
				echo 'one';
				break;
			default:
				echo 'other';
		}
	}

}
