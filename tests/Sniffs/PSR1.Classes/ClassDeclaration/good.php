<?php

namespace Tests\Sniffs\PSR1\Classes\ClassDeclaration;

/**
 * One class per file - this is correct
 */
class GoodExample
{

	private string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

}
