<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowContinueWithoutIntegerOperandInSwitch;

class BadExample
{

	public function method(int $value): void
	{
		switch ($value) {
			case 1:
				echo 'one';
				continue;
			case 2:
				echo 'two';
				continue;
			default:
				echo 'other';
				break;
		}
	}

}
