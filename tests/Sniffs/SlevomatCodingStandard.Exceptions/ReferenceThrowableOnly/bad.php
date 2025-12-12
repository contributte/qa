<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\ReferenceThrowableOnly;

class BadExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Exception $e) {
			echo 'Caught exception';
		}
	}

	private function doSomething(): void
	{
	}

}
