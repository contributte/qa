<?php

namespace Tests\Sniffs\PSR2\Namespaces\UseDeclaration;

use Exception, RuntimeException;
use InvalidArgumentException;
class BadExample
{

	public function test(): void
	{
		throw new Exception('Test');
	}

}
