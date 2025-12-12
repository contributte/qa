<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\NamingConventions\ValidFunctionName;

class GoodExample
{
	public function getUserName(): string
	{
		return 'John';
	}

	public function calculateTotal(): int
	{
		return 100;
	}

	protected function processData(): void
	{
	}

	private function validateInput(): bool
	{
		return true;
	}
}

function getGlobalData(): array
{
	return [];
}
