<?php declare(strict_types = 1);

class GoodFunctionComment
{

	/**
	 * Sample function with proper docblock
	 *
	 * @param string $name The name parameter
	 * @param int    $age  The age parameter
	 *
	 * @return string The result
	 */
	public function testFunction(string $name, int $age): string
	{
		return $name;
	}

}
