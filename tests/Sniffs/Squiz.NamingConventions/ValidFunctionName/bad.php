<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\NamingConventions\ValidFunctionName;

class BadExample
{
	public function get_user_name(): string
	{
		return 'John';
	}

	public function Calculate_Total(): int
	{
		return 100;
	}

	protected function PROCESS_DATA(): void
	{
	}

	private function Validate_Input(): bool
	{
		return true;
	}
}

function get_global_data(): array
{
	return [];
}
