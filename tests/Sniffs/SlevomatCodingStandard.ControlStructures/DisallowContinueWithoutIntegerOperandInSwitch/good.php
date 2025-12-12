<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitch;

class GoodExample
{

	public function method(int $value): void
	{
		switch ($value) {
			case 1:
				echo 'one';
				break;
			case 2:
				echo 'two';
				break;
			default:
				echo 'other';
				break;
		}
	}

	public function withLoop(): void
	{
		foreach ([1, 2, 3] as $item) {
			if ($item === 2) {
				continue;
			}
			echo $item;
		}
	}

}
