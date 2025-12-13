<?php declare(strict_types = 1);

namespace Tests\Custom;

use DateTime;

// Test: searchAnnotations=true - annotations are checked
/**
 * @return DateTime
 */
class Example
{

	public function test(): DateTime
	{
		return new DateTime();
	}

}
