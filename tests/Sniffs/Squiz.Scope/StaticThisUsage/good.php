<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Scope\StaticThisUsage;

class GoodExample
{
	public static function staticMethod(): void
	{
		self::doSomething();
	}

	public function instanceMethod(): void
	{
		$this->doSomething();
	}

	private static function doSomething(): void
	{
	}
}
