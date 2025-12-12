<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\ReferenceUsedNamesOnly;

use DateTime;
use Exception;

class GoodExample
{

	public function test(): DateTime
	{
		throw new Exception('error');
	}

}
