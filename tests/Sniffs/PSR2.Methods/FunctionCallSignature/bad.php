<?php declare(strict_types = 1);

namespace Contributte\QA\Tests;

// Incorrect function call signatures - violations
class Example
{

	public function test(): void
	{
		// Space after function name - violation
		$result = someFunction ($arg1, $arg2);

		// Opening parenthesis on new line - violation
		$result = someFunction
		($arg1, $arg2);

		// Multiple arguments on new line but not properly formatted - violation
		$result = someFunction($arg1,
			$arg2, $arg3);

		// Closing parenthesis not on its own line - violation
		$result = someFunction(
			$arg1,
			$arg2);
	}

}
