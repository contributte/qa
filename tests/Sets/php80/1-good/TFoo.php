<?php declare(strict_types = 1);

namespace Tests\Php80;

/**
 * @mixin IFoobar
 */
trait TFoo
{

	protected mixed $foobar;

	protected function contextFoobar(): void
	{
		$this->interfaceMethod('foo', 3);
	}

}
