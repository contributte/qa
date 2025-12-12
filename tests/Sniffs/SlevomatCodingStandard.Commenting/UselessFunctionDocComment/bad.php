<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\UselessFunctionDocComment;

class BadExample
{

	/**
	 * @param string $name
	 * @return string
	 */
	public function method(string $name): string
	{
		return $name;
	}

	/**
	 * @param int $count
	 * @return void
	 */
	public function another(int $count): void
	{
	}

}
