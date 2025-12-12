<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\UselessInheritDocComment;

interface BaseInterface
{

	public function method(): void;

}

class BadExample implements BaseInterface
{

	/**
	 * {@inheritDoc}
	 */
	public function method(): void
	{
	}

	/**
	 * @inheritDoc
	 */
	public function another(): void
	{
	}

}
