<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\ForbiddenClasses;

use DateTime;
use Exception;
use stdClass;

class BadExample
{

	public function example(): void
	{
		$date = new DateTime();
		throw new Exception();
		$obj = new stdClass();
	}

}
