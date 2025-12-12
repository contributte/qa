<?php

namespace Tests\Sniffs\PSR1\Files\SideEffects;

/**
 * Only declarations, no side effects - this is correct
 */
class GoodExample
{

	private string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function display(): void
	{
		echo $this->name;
	}

}
