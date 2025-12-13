<?php declare(strict_types = 1);

namespace Tests\Custom;

// Test: allowFullyQualifiedGlobalClasses=true
class Example
{

	public function test(): \DateTime
	{
		return new \DateTime();
	}

}
