<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullCoalesceOperator;

class GoodExample
{

	public function test(): void
	{
		$value = null;

		$result = $value ?? 'default';

		$array = [];
		$item = $array['key'] ?? 'missing';
	}

}
