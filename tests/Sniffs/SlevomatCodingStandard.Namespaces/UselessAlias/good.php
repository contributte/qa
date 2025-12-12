<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\UselessAlias;

use DateTime as Date;
use Exception as Exc;

class GoodExample
{

	public function test(): Date
	{
		return new Date();
	}

}
