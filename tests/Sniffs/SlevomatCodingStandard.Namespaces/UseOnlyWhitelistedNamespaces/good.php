<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\UseOnlyWhitelistedNamespaces;

use DateTime;
use Exception;

class GoodExample
{

	public function example(): void
	{
		$date = new DateTime();
		throw new Exception();
	}

}
