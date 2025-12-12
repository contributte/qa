<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Whitespaces\DuplicateSpaces;

class BadExample
{

	public function process(string $name,  int $age): void
	{
		$result = $name  .  ' '  .  $age;
	}

}
