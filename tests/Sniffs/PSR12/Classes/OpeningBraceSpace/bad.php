<?php declare(strict_types = 1);

// Bad - space before opening brace

class BadClass
{
	public function test(): void
	{
	}
}

class BadClassExtends extends BaseClass
{
}

class BadClassImplements implements SomeInterface
{
}
