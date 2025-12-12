<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\RequireNonCapturingCatch;

class GoodExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Exception) {
			echo 'Error occurred';
		}
	}

	public function testMultiple(): void
	{
		try {
			$this->doSomething();
		} catch (\RuntimeException | \InvalidArgumentException) {
			echo 'Multiple exceptions caught';
		}
	}

	private function doSomething(): void
	{
	}

}
