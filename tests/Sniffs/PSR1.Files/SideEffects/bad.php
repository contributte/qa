<?php

namespace Tests\Sniffs\PSR1\Files\SideEffects;

// Side effect: output
echo 'Loading configuration...';

// Side effect: defining constants
define('APP_VERSION', '1.0.0');

/**
 * Mixing declarations with side effects - this violates PSR1
 */
class BadExample
{

	private string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

}
