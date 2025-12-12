<?php declare(strict_types = 1);

// Opening brace on new line - violation
class BadClass
{
	public function method(): void
	{
		// Method body
	}
}

interface BadInterface
{
	public function method(): void;
}

trait BadTrait
{
	public function method(): void
	{
		// Method body
	}
}
