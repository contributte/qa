<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\RequireTrailingCommaInClosureUse;

class BadExample
{

	public function test(): void
	{
		$var1 = 'value1';
		$var2 = 'value2';

		$closure = function () use ($var1, $var2) {
			echo $var1 . $var2;
		};
	}

}
