<?php declare(strict_types = 1);

namespace Contributte\QA\Tests;

// Correct function call signatures
class Example
{

	public function test(): void
	{
		// Single line - correct
		$result = someFunction($arg1, $arg2);

		// Multi-line with proper formatting - correct
		$result = someFunction(
			$arg1,
			$arg2,
			$arg3
		);

		// No arguments - correct
		$result = someFunction();
	}

}
