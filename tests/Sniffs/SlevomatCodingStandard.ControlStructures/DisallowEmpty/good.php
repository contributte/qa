<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\DisallowEmpty;

class GoodExample
{

	public function method(array $items): void
	{
		if (count($items) === 0) {
			return;
		}
	}

	public function checkString(?string $value): void
	{
		if ($value === null || $value === '') {
			return;
		}
	}

}
