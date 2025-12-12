<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\LanguageConstructWithParentheses;

class GoodExample
{

	public function test(): void
	{
		echo 'Hello';

		print 'World';

		$items = [1, 2, 3];

		if (isset($items[0])) {
			unset($items[0]);
		}
	}

}
