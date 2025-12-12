<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\NullTypeHintOnLastPosition;

class GoodExample
{

	public function test(string|int|null $value): void
	{
	}

	/**
	 * @param string|int|null $value
	 */
	public function another($value): void
	{
	}

}
