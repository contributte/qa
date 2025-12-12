<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\NullableTypeForNullDefaultValue;

class GoodExample
{

	public function test(?string $value = null): void
	{
	}

	public function another(?int $number = null): void
	{
	}

}
