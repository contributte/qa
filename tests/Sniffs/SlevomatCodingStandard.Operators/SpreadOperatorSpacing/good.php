<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\SpreadOperatorSpacing;

class GoodExample
{

	public function test(int ...$numbers): void
	{
		$array = [1, 2, 3];
		$merged = [...$array, 4, 5];

		$this->call(...$numbers);
	}

	private function call(int ...$args): void
	{
	}

}
