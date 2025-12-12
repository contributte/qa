<?php

namespace Tests\Sniffs\PSR2\Namespaces\UseDeclaration;

use Exception;
use RuntimeException;
use InvalidArgumentException;

class GoodExample
{

	public function test(): void
	{
		throw new Exception('Test');
	}

}
