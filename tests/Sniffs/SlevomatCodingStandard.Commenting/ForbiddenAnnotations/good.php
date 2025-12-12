<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\ForbiddenAnnotations;

class GoodExample
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
	 * @throws \Exception
	 */
	public function throwing(): void
	{
		throw new \Exception();
	}

}
