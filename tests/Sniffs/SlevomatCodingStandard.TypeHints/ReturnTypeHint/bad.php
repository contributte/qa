<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\ReturnTypeHint;

class BadExample
{

	/**
	 * @return string
	 */
	public function getName()
	{
		return 'name';
	}

	/**
	 * @return int
	 */
	public function getAge()
	{
		return 25;
	}

}
