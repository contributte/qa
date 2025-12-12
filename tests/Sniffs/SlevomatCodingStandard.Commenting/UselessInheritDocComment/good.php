<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\UselessInheritDocComment;

interface BaseInterface
{

	public function method(): void;

}

class GoodExample implements BaseInterface
{

	public function method(): void
	{
	}

	/**
	 * {@inheritDoc}
	 * Additional documentation specific to this implementation.
	 */
	public function anotherMethod(): void
	{
	}

}
