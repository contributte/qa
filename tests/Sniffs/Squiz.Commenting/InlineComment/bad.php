<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\InlineComment;

class BadExample
{

	public function process(): void
	{
		//this is a bad inline comment
		$variable = true;
	}

}
