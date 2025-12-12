<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\PropertySpacing;

class BadExample
{

	public string $firstName;
	public string $lastName;

	public int $age;


	private static string $instance;

	protected static int $counter;



	/**
	 * Property with comment but wrong spacing
	 */
	public string $documented;
	/**
	 * Another property with comment but no spacing
	 */
	public int $alsoDocumented;

	private bool $active = true;


	private array $items = [];

}
