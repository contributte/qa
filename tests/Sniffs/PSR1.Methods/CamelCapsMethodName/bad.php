<?php

namespace Tests\Sniffs\PSR1\Methods\CamelCapsMethodName;

/**
 * Methods with underscores - this violates PSR1
 */
class BadExample
{

	private string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	// Violation: snake_case method name
	public function get_name(): string
	{
		return $this->name;
	}

	// Violation: snake_case method name
	public function set_name(string $name): void
	{
		$this->name = $name;
	}

	// Violation: snake_case method name
	public function process_user_data(array $data): array
	{
		return array_map('strtolower', $data);
	}

	// Violation: snake_case method name
	protected function validate_input(string $input): bool
	{
		return strlen($input) > 0;
	}

	// Violation: snake_case method name
	private function format_output(string $value): string
	{
		return trim($value);
	}

}
