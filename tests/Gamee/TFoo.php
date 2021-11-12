<?php

declare(strict_types=1);

namespace Tests;

/** @mixin IFoobar */
trait TFoo
{

	/**
	 * @var mixed
	 */
	protected $foobar;

	protected function contextFoobar(): void
	{
		$this->interfaceMethod('foo', 3);
	}

}
