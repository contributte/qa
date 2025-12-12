<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\DisallowMultiConstantDefinition;

class GoodExample
{

	public const FIRST = 1;

	public const SECOND = 2;

	public const THIRD = 3;

}
