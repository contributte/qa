<?php declare(strict_types = 1);

// PSR-12 compliant - constants must have visibility declared

class Test
{
	public const PUBLIC_CONSTANT = 'public';

	protected const PROTECTED_CONSTANT = 'protected';

	private const PRIVATE_CONSTANT = 'private';

	public const int TYPED_CONSTANT = 42;
}

interface TestInterface
{
	public const INTERFACE_CONSTANT = 'value';
}
