<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

// Missing empty line after opening brace - violation
class ClassesFixture
{
	// Missing constant visibility - violation
	const FOO = 'bar';

	// Multiple constants in one statement - violation
	public const BAR = 1, BAZ = 2;

	// Wrong order: property before constant - violation
	public string $property;

	// Multiple properties in one statement - violation
	public int $a, $b;

	// Self reference violation
	public function getSelf(): ClassesFixture
	{
		return $this;
	}

	// Missing empty line before closing brace - violation
}

// Interface with I prefix - violation
interface IWrongNaming
{

}

// Trait with T prefix - violation
trait TWrongNaming
{

}
