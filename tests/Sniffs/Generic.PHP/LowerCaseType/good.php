<?php declare(strict_types = 1);

// Using lowercase type hints - correct
function processData(string $data, int $count, bool $flag): array
{
	return [$data, $count, $flag];
}

class Example
{

	private string $name;

	private int $value;

	public function getValue(): int|float
	{
		return $this->value;
	}

}
