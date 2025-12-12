<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullCoalesceOperator;

class BadExample
{

	public function test(): void
	{
		$value = null;

		$result = isset($value) ? $value : 'default';

		$array = [];
		$item = isset($array['key']) ? $array['key'] : 'missing';
	}

}
