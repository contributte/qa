<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\EmptyComment;

class GoodExample
{

	// This is a useful comment
	public string $property;

	/**
	 * This method does something important.
	 */
	public function method(): void
	{
	}

	/* Block comment with content */
	public function another(): void
	{
	}

}
