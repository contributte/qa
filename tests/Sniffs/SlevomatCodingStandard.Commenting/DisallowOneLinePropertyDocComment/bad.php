<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DisallowOneLinePropertyDocComment;

class BadExample
{

	/** @var string */
	public string $property;

	/** @var int Description */
	public int $documented;

}
