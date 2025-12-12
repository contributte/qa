<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\ForbiddenComments;

class GoodExample
{

	/**
	 * Returns the user name.
	 */
	public function getUserName(): string
	{
		return 'name';
	}

	/**
	 * Validates the input data.
	 */
	public function validate(): bool
	{
		return true;
	}

}
