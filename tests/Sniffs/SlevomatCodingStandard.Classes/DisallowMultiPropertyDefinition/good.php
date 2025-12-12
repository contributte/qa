<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\DisallowMultiPropertyDefinition;

class GoodExample
{

	public string $firstName;

	public string $lastName;

	public int $age;

	private static string $instance;

	protected static int $counter;

	public string $name = 'default';

	public int $count = 0;

	private bool $active = true;

}
