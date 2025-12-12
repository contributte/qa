<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\ClosingDeclarationComment;

class GoodExample
{

	public function process(): void
	{
		if (true) {
			// Code
		}
	}

}
