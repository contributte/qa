<?php declare(strict_types = 1);

class BadFunctionComment
{

	// Missing proper function docblock
	public function testFunction(string $name, int $age): string
	{
		return $name;
	}

}
