<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Operators\ComparisonOperatorUsage;

class GoodExample
{
	public function compare(int $value): bool
	{
		if ($value === 0) {
			return true;
		}

		if ($value !== 10) {
			return false;
		}

		return $value > 5;
	}
}
