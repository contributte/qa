<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Files\LineLength;

class GoodExample
{

	public function test(): void
	{
		$shortLine = 'This is a short line';
		echo $shortLine;
	}

}
