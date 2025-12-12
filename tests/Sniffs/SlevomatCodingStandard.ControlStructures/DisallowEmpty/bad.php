<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowEmpty;

class BadExample
{

	public function method(array $items): void
	{
		if (empty($items)) {
			return;
		}
	}

	public function checkString(?string $value): void
	{
		if (empty($value)) {
			return;
		}
	}

}
