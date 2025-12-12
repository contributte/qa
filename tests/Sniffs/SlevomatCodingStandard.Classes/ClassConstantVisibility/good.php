<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ClassConstantVisibility;

class GoodExample
{

	public const PUBLIC_CONSTANT = 'public';

	protected const PROTECTED_CONSTANT = 'protected';

	private const PRIVATE_CONSTANT = 'private';

	public const int TYPED_CONSTANT = 42;

}
