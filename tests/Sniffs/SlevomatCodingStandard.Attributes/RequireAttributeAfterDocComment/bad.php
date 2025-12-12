<?php declare(strict_types = 1);

namespace Test;

#[AttributeA]
/**
 * This is a class
 */
class MyClass
{

}

class Example
{

	#[AttributeX]
	/**
	 * This is a property
	 */
	public string $property;

	#[FirstAttribute]
	/**
	 * This is a method
	 */
	public function method(): void
	{

	}

}
