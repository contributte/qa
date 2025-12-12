<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Strings\ConcatenationSpacing;

class GoodExample
{
	public function process(): void
	{
		$result = 'hello' . ' ' . 'world';
		$name = 'John';
		$greeting = 'Hello ' . $name;
		$full = $greeting . '!';
	}
}
