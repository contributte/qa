<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\ForbiddenComments;

class BadExample
{

	/**
	 * Constructor.
	 */
	public function __construct()
	{
	}

	/**
	 * Gets user name.
	 */
	public function getUserName(): string
	{
		return 'name';
	}

}
