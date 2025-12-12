<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\PropertySpacing;

class GoodExample
{

	public string $firstName;

	public string $lastName;

	public int $age;

	private static string $instance;

	protected static int $counter;

	/**
	 * Property with comment
	 */
	public string $documented;

	/**
	 * Another property with comment
	 */
	public int $alsoDocumented;

	private bool $active = true;

	private array $items = [];

}
