<?php declare(strict_types = 1);

namespace Test;

#[AttributeC]
#[AttributeA]
#[AttributeB]
class MyClass
{

}

class Example
{

	#[AttributeZ]
	#[AttributeX]
	#[AttributeY]
	public string $property;

	#[ThirdAttribute]
	#[FirstAttribute]
	#[SecondAttribute]
	public function method(): void
	{

	}

}
