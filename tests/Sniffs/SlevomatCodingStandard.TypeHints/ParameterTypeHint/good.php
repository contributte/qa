<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\ParameterTypeHint;

class GoodExample
{

	public function test(string $name, int $age): void
	{
	}

	public function another(array $items, ?string $default = null): void
	{
	}

}
