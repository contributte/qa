<?php

namespace Tests\Sniffs\PSR1\Methods\CamelCapsMethodName;

/**
 * All methods in camelCase - this is correct
 */
class GoodExample
{

	private string $name;

	public function __construct(string $name)
	{
		$this->name = $name;
	}

	public function getName(): string
	{
		return $this->name;
	}

	public function setName(string $name): void
	{
		$this->name = $name;
	}

	public function processUserData(array $data): array
	{
		return array_map('strtolower', $data);
	}

	protected function validateInput(string $input): bool
	{
		return strlen($input) > 0;
	}

	private function formatOutput(string $value): string
	{
		return trim($value);
	}

}
