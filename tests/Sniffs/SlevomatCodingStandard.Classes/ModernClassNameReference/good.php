<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ModernClassNameReference;

use stdClass;
use Exception;

class GoodExample
{

	public function getClassName(): string
	{
		return self::class;
	}

	public function getStaticClassName(): string
	{
		return static::class;
	}

	public function getOtherClassName(): string
	{
		return stdClass::class;
	}

	public function checkInstance(object $obj): bool
	{
		return $obj instanceof Exception;
	}

	public function createInstance(): object
	{
		$className = stdClass::class;
		return new $className();
	}

}
