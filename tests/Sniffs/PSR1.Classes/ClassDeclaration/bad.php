<?php

namespace Tests\Sniffs\PSR1\Classes\ClassDeclaration;

/**
 * Multiple classes in one file - this violates PSR1
 */
class FirstClass
{

	private string $value;

	public function getValue(): string
	{
		return $this->value;
	}

}

/**
 * Second class in the same file - violation
 */
class SecondClass
{

	private int $count;

	public function getCount(): int
	{
		return $this->count;
	}

}
