<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\FunctionCommentThrowTag;

use RuntimeException;

class BadExample
{

	/**
	 * Process something
	 *
	 * @throws RuntimeException
	 */
	public function process(): void
	{
		throw new RuntimeException('Error');
	}

}
