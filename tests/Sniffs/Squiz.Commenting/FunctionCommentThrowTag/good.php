<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\FunctionCommentThrowTag;

use RuntimeException;

class GoodExample
{

	/**
	 * Process something
	 *
	 * @throws RuntimeException When something goes wrong
	 */
	public function process(): void
	{
		throw new RuntimeException('Error');
	}

}
