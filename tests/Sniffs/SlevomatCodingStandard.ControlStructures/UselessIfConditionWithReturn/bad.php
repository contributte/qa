<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\UselessIfConditionWithReturn;

class BadExample
{

	public function test(int $value): bool
	{
		if ($value > 0) {
			return true;
		}

		return false;
	}

	public function other(string $name): bool
	{
		if ($name !== '') {
			return true;
		} else {
			return false;
		}
	}

}
