<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\UselessLateStaticBinding;

class GoodExample
{

	public function create(): self
	{
		return new self();
	}

	public static function getInstance(): self
	{
		return new self();
	}

}

class ExtendableExample
{

	public static function create(): static
	{
		return new static();
	}

}
