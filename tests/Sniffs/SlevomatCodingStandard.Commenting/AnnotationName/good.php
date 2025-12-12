<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\AnnotationName;

class GoodExample
{

	/**
	 * @param string $value The value
	 * @return void
	 */
	public function method(string $value): void
	{
	}

	/**
	 * @var string
	 */
	private string $property;

	/**
	 * @throws \Exception
	 */
	public function throwsException(): void
	{
		throw new \Exception();
	}

}
