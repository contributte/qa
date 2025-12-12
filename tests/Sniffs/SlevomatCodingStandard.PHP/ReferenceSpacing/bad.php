<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\ReferenceSpacing;

class BadExample
{

	public function test(& $value): void
	{
		$value = 10;
	}

	public function another(int & $number): void
	{
		$number++;
	}

}
