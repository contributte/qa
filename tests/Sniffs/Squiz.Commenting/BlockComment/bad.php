<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\BlockComment;

class BadExample
{

	public function process(): void
	{
		/* This is a badly formatted
		   block comment */
		$variable = true;
	}

}
