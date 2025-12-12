<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\EarlyExit;

class BadExample
{

	public function method(?string $value): void
	{
		if ($value !== null) {
			echo $value;
		}
	}

	public function anotherMethod(int $number): void
	{
		if ($number > 0) {
			echo $number;
		}
	}

}
