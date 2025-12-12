<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\DisallowMultiPropertyDefinition;

class BadExample
{

	public string $firstName, $lastName;

	public int $age, $height, $weight;

	private static string $instance, $fallback;

	protected static int $counter, $total, $sum;

}
