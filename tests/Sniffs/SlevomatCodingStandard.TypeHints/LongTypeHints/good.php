<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\LongTypeHints;

class GoodExample
{

	public function test(int $number, bool $flag): void
	{
	}

	/**
	 * @param int $a
	 * @param bool $b
	 */
	public function another($a, $b): void
	{
	}

}
