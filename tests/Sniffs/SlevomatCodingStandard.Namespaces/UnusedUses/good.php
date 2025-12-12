<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\UnusedUses;

use DateTime;

class GoodExample
{

	public function test(): DateTime
	{
		return new DateTime();
	}

}
