<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\ReferenceUsedNamesOnly;

class BadExample
{

	public function test(): \DateTime
	{
		throw new \Exception('error');
	}

}
