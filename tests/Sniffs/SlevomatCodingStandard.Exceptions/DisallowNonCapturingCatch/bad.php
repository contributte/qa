<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\DisallowNonCapturingCatch;

class BadExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Exception) {
			echo 'Non-capturing catch';
		}
	}

	public function testMultiple(): void
	{
		try {
			$this->doSomething();
		} catch (\RuntimeException | \InvalidArgumentException) {
			echo 'Multiple non-capturing catch';
		}
	}

	private function doSomething(): void
	{
	}

}
