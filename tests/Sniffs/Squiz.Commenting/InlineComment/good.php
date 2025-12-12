<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\InlineComment;

class GoodExample
{

	public function process(): void
	{
		// This is a proper inline comment.
		$variable = true;
	}

}
