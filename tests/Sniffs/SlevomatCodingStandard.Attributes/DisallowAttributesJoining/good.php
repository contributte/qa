<?php declare(strict_types = 1);

namespace Test;

#[AttributeA]
#[AttributeB]
#[AttributeC]
class MyClass
{

}

class Example
{

	#[AttributeX]
	#[AttributeY]
	public string $property;

	#[FirstAttribute]
	#[SecondAttribute]
	public function method(): void
	{

	}

}
