<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\FullyQualifiedExceptions;

use RuntimeException;

class BadExample
{

	public function test(): void
	{
		throw new RuntimeException('Error');
	}

}
