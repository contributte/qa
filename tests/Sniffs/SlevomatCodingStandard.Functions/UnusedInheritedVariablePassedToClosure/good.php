<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\UnusedInheritedVariablePassedToClosure;

class GoodExample
{

	public function test(): void
	{
		$used = 'value';

		$closure = function () use ($used): string {
			return $used;
		};
	}

}
