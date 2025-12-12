<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Scope\StaticThisUsage;

class BadExample
{
	public static function staticMethod(): void
	{
		$this->doSomething();
	}

	private function doSomething(): void
	{
	}
}
