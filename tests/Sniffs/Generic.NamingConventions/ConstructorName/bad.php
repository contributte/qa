<?php declare(strict_types = 1);

// PHP4 style constructor - violation
class MyClass
{

	public function MyClass()
	{
		// Old style constructor
	}

}

class AnotherClass
{

	public function AnotherClass($param)
	{
		// Old style constructor
	}

	public function myMethod()
	{
		return true;
	}

}
