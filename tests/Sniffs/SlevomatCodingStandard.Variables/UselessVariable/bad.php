<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\UselessVariable;

class BadExample
{

	public function getName(): string
	{
		$name = $this->fetchName();
		return $name;
	}

	private function fetchName(): string
	{
		return 'name';
	}

}
