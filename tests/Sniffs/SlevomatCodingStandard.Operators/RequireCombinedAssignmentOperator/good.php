<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\RequireCombinedAssignmentOperator;

class GoodExample
{

	public function test(): void
	{
		$value = 5;

		$value += 10;

		$value -= 3;

		$value *= 2;

		$string = 'hello';
		$string .= ' world';
	}

}
