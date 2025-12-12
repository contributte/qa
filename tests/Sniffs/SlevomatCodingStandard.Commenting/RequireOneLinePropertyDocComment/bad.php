<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\RequireOneLinePropertyDocComment;

class BadExample
{

	/**
	 * @var string
	 */
	public string $property;

	/**
	 * @var int
	 */
	public int $count;

}
