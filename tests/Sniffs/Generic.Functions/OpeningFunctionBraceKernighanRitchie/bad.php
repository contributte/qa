<?php declare(strict_types = 1);

// BSD/Allman style - opening brace on new line (violation)
function myFunction()
{
	return true;
}

function anotherFunction($param)
{
	return $param;
}

class TestClass
{

	public function methodOne()
	{
		return 1;
	}

	public function methodTwo($x, $y)
	{
		return $x + $y;
	}

}
