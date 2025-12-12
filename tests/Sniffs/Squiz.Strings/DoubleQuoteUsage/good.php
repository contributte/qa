<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Strings\DoubleQuoteUsage;

class GoodExample
{
	public function process(): void
	{
		$simple = 'hello world';
		$withEscape = 'don\'t';
		$name = 'John';
		$interpolated = "Hello $name";
		$withNewline = "Hello\nWorld";
		$withTab = "Hello\tWorld";
	}
}
