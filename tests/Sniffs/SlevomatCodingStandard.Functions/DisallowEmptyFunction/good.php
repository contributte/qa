<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\DisallowEmptyFunction;

class GoodExample
{

	public function test(): void
	{
		$this->doSomething();
	}

	private function doSomething(): void
	{
		echo 'Hello';
	}

}
