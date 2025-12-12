<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\EmptyComment;

class BadExample
{

	//
	public string $property;

	/**
	 *
	 */
	public function method(): void
	{
	}

	/**/
	public function another(): void
	{
	}

}
