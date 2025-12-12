<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Strings\DisallowVariableParsing;

class BadExample
{

	public function example(): void
	{
		$name = 'John';
		$age = 30;

		$message = "Hello, $name";
		$info = "Age: $age";
		$complex = "User $name is $age years old";
	}

}
