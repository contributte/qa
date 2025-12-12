<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\PostStatementComment;

class GoodExample
{

	public function process(): void
	{
		// This is a proper comment.
		$variable = true;
	}

}
