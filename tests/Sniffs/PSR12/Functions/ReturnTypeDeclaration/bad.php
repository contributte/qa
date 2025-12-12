<?php declare(strict_types = 1);

// Bad - incorrect spacing around colon

function test():string
{
	return 'test';
}

class Test
{
	public function method()  :  int
	{
		return 1;
	}

	public function nullable() : ?array
	{
		return null;
	}
}
