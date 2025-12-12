<?php declare(strict_types = 1);

// PSR-12 compliant opening brace spacing - no space before opening brace

class GoodClass
{
	public function test(): void
	{
	}
}

class GoodClassExtends extends BaseClass
{
}

class GoodClassImplements implements SomeInterface
{
}

class GoodClassBoth extends BaseClass implements SomeInterface
{
}
