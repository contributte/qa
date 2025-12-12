<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\ParameterTypeHint;

class BadExample
{

	public function test($name, $age): void
	{
	}

	/**
	 * @param array $items
	 */
	public function another($items): void
	{
	}

}
