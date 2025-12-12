<?php declare(strict_types = 1);

namespace Test;

/**
 * This is a class
 */
#[AttributeA]
class MyClass
{

}

class Example
{

	/**
	 * This is a property
	 */
	#[AttributeX]
	public string $property;

	/**
	 * This is a method
	 */
	#[FirstAttribute]
	public function method(): void
	{

	}

}
