<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\UnusedInheritedVariablePassedToClosure;

class BadExample
{

	public function test(): void
	{
		$unused = 'value';

		$closure = function () use ($unused): string {
			return 'nothing';
		};
	}

}
