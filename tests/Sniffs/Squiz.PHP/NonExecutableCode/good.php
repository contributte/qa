<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\NonExecutableCode;

class GoodExample
{
	public function processValue(int $value): int
	{
		if ($value > 10) {
			return $value * 2;
		}

		return $value;
	}

	public function throwException(bool $condition): void
	{
		if ($condition) {
			throw new \RuntimeException('Error occurred');
		}

		echo 'Continuing execution';
	}

	public function exitEarly(bool $shouldExit): void
	{
		if ($shouldExit) {
			exit(1);
		}

		echo 'Still running';
	}
}
