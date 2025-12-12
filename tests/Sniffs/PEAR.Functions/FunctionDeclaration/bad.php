<?php declare(strict_types = 1);

class BadFunctionDeclaration
{

	public function shortFunction(string $name) : string
	{
		return $name;
	}

	public function multiLineFunction(
		string $arg1,string $arg2,
		string $arg3): string
	{
		return $arg1 . $arg2 . $arg3;
	}

}
