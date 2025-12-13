<?php declare(strict_types = 1);

// Test: checkIfConditions=false (allows if conditions for null assignment)
namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullCoalesceEqualOperator;

class Example2
{

	public function test(): void
	{
		$value = null;

		if ($value === null) {
			$value = 'default';
		}

		$array = [];
		$array['key'] ??= 'value';
	}

}
