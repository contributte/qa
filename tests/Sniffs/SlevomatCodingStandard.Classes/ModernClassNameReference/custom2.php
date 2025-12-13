<?php

// Test: enableOnObjects=false (allows get_class on objects)
namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ModernClassNameReference;

use stdClass;

class Example2
{

	public function getClassNameFromObject(object $obj): string
	{
		return get_class($obj);
	}

	public function getSelfClassName(): string
	{
		return self::class;
	}

}
