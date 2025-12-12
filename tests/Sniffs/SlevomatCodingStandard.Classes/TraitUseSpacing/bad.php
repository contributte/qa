<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\TraitUseSpacing;

trait SomeTrait
{
}

class BadExample
{

	use SomeTrait;
	private string $property;

	public function method(): void
	{
	}

}
