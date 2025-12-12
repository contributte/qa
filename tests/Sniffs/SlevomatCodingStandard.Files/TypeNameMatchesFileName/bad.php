<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Files\TypeNameMatchesFileName;

class MismatchedClassName
{

	public function test(): void
	{
		echo 'Class name does not match file name';
	}

}
