<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\LongConditionClosingComment;

class BadExample
{

	public function process(): void
	{
		if (true && false && true && false && true && false && true) {
			$variable = true;
		}
	}

}
