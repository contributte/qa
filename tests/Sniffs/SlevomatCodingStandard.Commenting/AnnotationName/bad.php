<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\AnnotationName;

class BadExample
{

	/**
	 * @PARAM string $value The value
	 * @RETURN void
	 */
	public function method(string $value): void
	{
	}

	/**
	 * @VAR string
	 */
	private string $property;

}
