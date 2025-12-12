<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\UseOnlyWhitelistedNamespaces;

use DateTime;
use Exception;
use Vendor\NotWhitelisted\Package;

class BadExample
{

	public function example(): void
	{
		$date = new DateTime();
		throw new Exception();
		$pkg = new Package();
	}

}
