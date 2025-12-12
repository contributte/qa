<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireShortTernaryOperator;

class BadExample
{

	public function test(): void
	{
		$value = 'test';

		$result = $value ? $value : 'default';

		$name = $this->getName() ? $this->getName() : 'anonymous';
	}

	private function getName(): ?string
	{
		return null;
	}

}
