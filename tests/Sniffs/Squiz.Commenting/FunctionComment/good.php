<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\FunctionComment;

class GoodExample
{

	/**
	 * Calculates the sum of two numbers.
	 *
	 * @param int $a The first number
	 * @param int $b The second number
	 * @return int
	 */
	public function calculateSum(int $a, int $b): int
	{
		return $a + $b;
	}

	/**
	 * Processes user data.
	 *
	 * @param string $name The user name
	 * @param int    $age  The user age
	 * @return void
	 */
	public function processUser(string $name, int $age): void
	{
		// Process user
	}

}
