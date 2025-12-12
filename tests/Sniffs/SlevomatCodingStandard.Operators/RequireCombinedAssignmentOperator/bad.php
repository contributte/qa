<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\RequireCombinedAssignmentOperator;

class BadExample
{

	public function test(): void
	{
		$value = 5;

		$value = $value + 10;

		$value = $value - 3;

		$value = $value * 2;

		$string = 'hello';
		$string = $string . ' world';
	}

}
