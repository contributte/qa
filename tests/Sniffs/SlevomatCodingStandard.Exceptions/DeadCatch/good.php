<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\DeadCatch;

class GoodExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\InvalidArgumentException $e) {
			echo 'Invalid argument';
		} catch (\RuntimeException $e) {
			echo 'Runtime error';
		} catch (\Exception $e) {
			echo 'Generic error';
		}
	}

	private function doSomething(): void
	{
	}

}
