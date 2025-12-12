<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Exceptions\ReferenceThrowableOnly;

class GoodExample
{

	public function test(): void
	{
		try {
			$this->doSomething();
		} catch (\Throwable $e) {
			echo 'Caught throwable';
		}
	}

	public function catchSpecific(): void
	{
		try {
			$this->doSomething();
		} catch (\RuntimeException $e) {
			echo 'Caught runtime exception';
		}
	}

	private function doSomething(): void
	{
	}

}
