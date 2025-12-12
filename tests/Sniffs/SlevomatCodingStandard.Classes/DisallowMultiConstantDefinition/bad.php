<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\DisallowMultiConstantDefinition;

class BadExample
{

	public const FIRST = 1, SECOND = 2;

	public const THIRD = 3, FOURTH = 4, FIFTH = 5;

}
