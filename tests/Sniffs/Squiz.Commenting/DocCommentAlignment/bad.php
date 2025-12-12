<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\DocCommentAlignment;

class BadExample
{

	/**
	 * This comment has misaligned asterisks.
	  * This line is not aligned properly
	 * @param string $name The name parameter
	  * @return void
	 */
	public function doSomething(string $name): void
	{
		// Implementation
	}

}
