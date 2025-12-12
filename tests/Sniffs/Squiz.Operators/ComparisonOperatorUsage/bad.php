<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Operators\ComparisonOperatorUsage;

class BadExample
{
	public function compare(int $value): bool
	{
		if (true === ($value === 0)) {
			return true;
		}

		if (false === ($value !== 10)) {
			return false;
		}

		return true === ($value > 5);
	}
}
