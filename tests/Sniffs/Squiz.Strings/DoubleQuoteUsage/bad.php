<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Strings\DoubleQuoteUsage;

class BadExample
{
	public function process(): void
	{
		$simple = "hello world";
		$another = "simple string";
		$noInterpolation = "no variables here";
	}
}
