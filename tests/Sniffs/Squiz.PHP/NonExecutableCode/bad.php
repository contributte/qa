<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\NonExecutableCode;

class BadExample
{
	public function unreachableAfterReturn(int $value): int
	{
		return $value * 2;
		echo 'This will never execute';
		$x = 10;
	}

	public function unreachableAfterThrow(): void
	{
		throw new \RuntimeException('Error');
		echo 'This is unreachable';
		$data = [];
	}

	public function unreachableAfterExit(): void
	{
		exit(1);
		echo 'Never reached';
		$result = true;
	}
}
