<?php declare(strict_types = 1);

namespace Tests\Custom;

use DateTime;

// Test: allowFullyQualifiedNameForCollidingClasses=true
class DateTime
{
}

class Example
{

	public function test(): \DateTime
	{
		return new \DateTime();
	}

}
