<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\NullTypeHintOnLastPosition;

class BadExample
{

	/**
	 * @param null|string|int $value
	 */
	public function test($value): void
	{
	}

}
