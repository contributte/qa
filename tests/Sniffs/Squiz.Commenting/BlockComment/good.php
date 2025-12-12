<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\BlockComment;

class GoodExample
{

	public function process(): void
	{
		/*
		 * This is a properly formatted
		 * block comment.
		 */
		$variable = true;
	}

}
