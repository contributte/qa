<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\DeadCatch;

class BadExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Throwable $e) {
			echo 'Caught throwable';
		} catch (\Exception $e) {
			echo 'This catch is dead';
		}
	}

	private function doSomething(): void
	{
	}

}
