<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ModernClassNameReference;

use stdClass;

class BadExample
{

	public function getClassName(): string
	{
		return __CLASS__;
	}

	public function getClassNameString(): string
	{
		return 'Tests\Sniffs\SlevomatCodingStandard\Classes\ModernClassNameReference\BadExample';
	}

	public function getOtherClassName(): string
	{
		return 'stdClass';
	}

	public function checkInstanceString($obj): bool
	{
		return get_class($obj) === 'stdClass';
	}

	public function createInstance(): object
	{
		$className = 'stdClass';
		return new $className();
	}

}
