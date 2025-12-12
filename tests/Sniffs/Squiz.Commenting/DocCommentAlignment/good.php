<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\DocCommentAlignment;

class GoodExample
{

	/**
	 * This is a properly aligned doc comment.
	 *
	 * @param string $name The name parameter
	 * @return void
	 */
	public function doSomething(string $name): void
	{
		// Implementation
	}

	/**
	 * Another properly aligned comment.
	 *
	 * @var string
	 */
	private string $property;

}
