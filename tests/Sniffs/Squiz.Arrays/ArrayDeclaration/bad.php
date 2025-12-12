<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Arrays\ArrayDeclaration;

class BadExample
{

	public function getItems(): array
	{
		return ['first' => 1,
			'second' => 2,];
	}

}
