<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\RequireNonCapturingCatch;

class BadExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Exception $e) {
			echo 'Variable not used';
		}
	}

	public function testWithUnusedVariable(): void
	{
		try {
			$this->doSomething();
		} catch (\RuntimeException $exception) {
			echo 'Exception variable not used';
		}
	}

	private function doSomething(): void
	{
	}

}
