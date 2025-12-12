<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\ParameterTypeHintSpacing;

class GoodExample
{

	public function test(string $name, int $age): void
	{
	}

	public function another(?string $value): void
	{
	}

}
