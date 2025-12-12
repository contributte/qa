<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\UselessConstantTypeHint;

class BadExample
{

	/** @var string */
	public const string NAME = 'name';

	/** @var int */
	public const int AGE = 25;

}
