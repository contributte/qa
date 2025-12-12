<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\DisallowNonCapturingCatch;

class GoodExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Exception $e) {
			echo 'Error occurred';
		}
	}

	public function testWithVariable(): void
	{
		try {
			$this->doSomething();
		} catch (\RuntimeException $exception) {
			error_log($exception->getMessage());
		}
	}

	private function doSomething(): void
	{
	}

}
