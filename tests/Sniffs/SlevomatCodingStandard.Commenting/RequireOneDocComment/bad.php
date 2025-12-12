<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\RequireOneDocComment;

class BadExample
{

	/**
	 * First docblock
	 */
	/**
	 * Second docblock
	 */
	public function method(): void
	{
	}

}
