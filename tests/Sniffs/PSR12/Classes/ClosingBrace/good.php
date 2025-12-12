<?php declare(strict_types = 1);

// PSR-12 compliant closing brace placement

class GoodClass
{
	public function test(): void
	{
		if (true) {
			// content
		}
	}
}

interface GoodInterface
{
	public function method(): void;
}

trait GoodTrait
{
	public function test(): void
	{
	}
}
