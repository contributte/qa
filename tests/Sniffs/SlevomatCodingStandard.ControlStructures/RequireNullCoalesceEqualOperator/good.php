<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireNullCoalesceEqualOperator;

class GoodExample
{

	public function test(): void
	{
		$value = null;

		$value ??= 'default';

		$array = [];
		$array['key'] ??= 'value';
	}

}
