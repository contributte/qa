<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\LanguageConstructWithParentheses;

class BadExample
{

	public function test(): void
	{
		echo('Hello');

		print('World');
	}

}
