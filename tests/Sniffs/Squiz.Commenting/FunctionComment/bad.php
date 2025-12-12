<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\FunctionComment;

class BadExample
{

	/**
	 * Missing param tags and return tag
	 */
	public function calculateSum(int $a, int $b): int
	{
		return $a + $b;
	}

	// Missing doc comment entirely
	public function processUser(string $name, int $age): void
	{
		// Process user
	}

	/**
	 * Wrong parameter types
	 *
	 * @param string $data This should be array
	 * @return string This should be void
	 */
	public function saveData(array $data): void
	{
		// Save data
	}

}
