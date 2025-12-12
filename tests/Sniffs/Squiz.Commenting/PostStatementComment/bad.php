<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\PostStatementComment;

class BadExample
{

	public function process(): void
	{
		$variable = true; // This is a post-statement comment.
	}

}
