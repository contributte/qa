<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\LongTypeHints;

class BadExample
{

	/**
	 * @param integer $number
	 * @param boolean $flag
	 */
	public function test($number, $flag): void
	{
	}

}
