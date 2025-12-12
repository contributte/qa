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
	#[AttributeZ]
	public string $property;

	#[FirstAttribute]
	#[SecondAttribute]
	#[ThirdAttribute]
	public function method(): void
	{

	}

}
