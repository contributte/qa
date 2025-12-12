<?php declare(strict_types = 1);

// Modern constructor - correct
class MyClass
{

	public function __construct()
	{
		// Constructor code
	}

}

class AnotherClass
{

	public function __construct($param)
	{
		// Constructor code
	}

	public function myMethod()
	{
		return true;
	}

}
