<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\TraitUseSpacing;

trait SomeTrait
{
}

class GoodExample
{

	use SomeTrait;

	private string $property;

	public function method(): void
	{
	}

}
