<?php

namespace Tests\Sniffs\PSR2\Classes\PropertyDeclaration;

/**
 * Good property declarations - all pass PSR2
 */
class GoodExample
{

	// Properties with visibility modifiers
	public string $publicProperty;

	protected int $protectedProperty;

	private array $privateProperty;

	// One property per statement
	public string $firstName;

	public string $lastName;

	// Static properties with visibility
	public static string $staticPublic;

	protected static int $staticProtected;

	private static array $staticPrivate;

	// Properties with default values
	public string $name = 'default';

	protected int $count = 0;

	private bool $active = true;

}
