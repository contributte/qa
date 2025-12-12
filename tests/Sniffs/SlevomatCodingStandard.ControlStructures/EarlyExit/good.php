<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\EarlyExit;

class GoodExample
{

	public function method(?string $value): void
	{
		if ($value === null) {
			return;
		}

		echo $value;
	}

	public function anotherMethod(int $number): void
	{
		if ($number <= 0) {
			return;
		}

		echo $number;
	}

}
