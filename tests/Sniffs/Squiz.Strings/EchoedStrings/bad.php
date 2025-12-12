<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Strings\EchoedStrings;

class BadExample
{
	public function process(): void
	{
		echo('hello world');
		$name = 'John';
		echo($name);
		echo('Hello ' . $name);
	}
}
