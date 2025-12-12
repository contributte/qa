<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DisallowOneLinePropertyDocComment;

class GoodExample
{

	/**
	 * @var string
	 */
	public string $property;

	/**
	 * Description of the property
	 * @var int
	 */
	public int $documented;

}
