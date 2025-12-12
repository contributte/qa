<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\LongConditionClosingComment;

class GoodExample
{

	public function process(): void
	{
		if (true) {
			$a = 1;
			$b = 2;
			$c = 3;
		}//end if
	}

}
