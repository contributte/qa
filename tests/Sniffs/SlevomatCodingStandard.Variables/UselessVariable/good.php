<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\UselessVariable;

class GoodExample
{

	public function getName(): string
	{
		return $this->fetchName();
	}

	private function fetchName(): string
	{
		return 'name';
	}

}
