<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DocCommentSpacing;

class BadExample
{

	/**
	 * Description of the method.
	 * @param string $name The name parameter
	 * @return string
	 */
	public function method(string $name): string
	{
		return $name;
	}

	/**
	 *
	 * Short description.
	 *
	 */
	public function simple(): void
	{
	}

}
