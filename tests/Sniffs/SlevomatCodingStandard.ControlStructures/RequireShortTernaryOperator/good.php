<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireShortTernaryOperator;

class GoodExample
{

	public function test(): void
	{
		$value = 'test';

		$result = $value ?: 'default';

		$name = $this->getName() ?: 'anonymous';
	}

	private function getName(): ?string
	{
		return null;
	}

}
