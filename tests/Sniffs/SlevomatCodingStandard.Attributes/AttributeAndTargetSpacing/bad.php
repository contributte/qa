<?php declare(strict_types = 1);

namespace Test;

#[Attribute]

class MyAttribute
{

}

#[MyAttribute]


class MyClass
{

}

#[MyAttribute]

function myFunction(): void
{

}

class Example
{

	#[MyAttribute]

	public string $property;

	#[MyAttribute]


	public function method(): void
	{

	}

}
