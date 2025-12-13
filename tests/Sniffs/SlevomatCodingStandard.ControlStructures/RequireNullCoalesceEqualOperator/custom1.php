<?php declare(strict_types = 1);

// Test: checkIfConditions=true
namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullCoalesceEqualOperator;

class Example1
{

	public function test(): void
	{
		$value = null;

		$value ??= 'default';

		$array = [];
		$array['key'] ??= 'value';
	}

}
