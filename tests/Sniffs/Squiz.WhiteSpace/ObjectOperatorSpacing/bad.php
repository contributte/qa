<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\ObjectOperatorSpacing;

class BadExample
{
	public function process(): void
	{
		$object = new \stdClass();
		$object ->property = 'value';
		$object-> method();
		$this -> chainedMethod() -> anotherMethod();
	}
}
