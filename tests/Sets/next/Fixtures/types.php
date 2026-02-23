<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

class TypesFixture
{

	// Missing property type hint - violation
	public $untyped;

	// Long type hint - violation (integer instead of int)
	public integer $longType;

	// Missing parameter type hint - violation
	public function noParamType($param)
	{
		return $param;
	}

	// Missing return type hint - violation
	public function noReturnType()
	{
		return 'test';
	}

	// Nullable without ? - violation (default null but no nullable type)
	public function nullDefault(string $param = null): void
	{
	}

}
