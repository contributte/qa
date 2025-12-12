<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\EmptyLinesAroundClassBraces;

class GoodExample
{

	public string $property;

	public function method(): void
	{
	}

}

interface GoodInterface
{

	public function method(): void;

}

trait GoodTrait
{

	public string $traitProperty;

	public function traitMethod(): void
	{
	}

}
