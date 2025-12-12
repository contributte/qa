<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullCoalesceEqualOperator;

class BadExample
{

	public function test(): void
	{
		$value = null;

		$value = $value ?? 'default';

		$array = [];
		$array['key'] = $array['key'] ?? 'value';
	}

}
