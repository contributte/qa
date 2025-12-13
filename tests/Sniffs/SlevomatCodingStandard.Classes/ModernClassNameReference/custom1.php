<?php

// Test: enableOnObjects=true
namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ModernClassNameReference;

use stdClass;

class Example1
{

	public function getClassNameFromObject(object $obj): string
	{
		return $obj::class;
	}

	public function getSelfClassName(): string
	{
		return self::class;
	}

}
