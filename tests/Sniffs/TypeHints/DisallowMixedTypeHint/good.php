<?php declare(strict_types = 1);

class GoodExample
{

	public function processString(string $value): string
	{
		return $value;
	}

	public function processData(array $data): array
	{
		return $data;
	}

	/**
	 * @param string|int $value
	 * @return string|int
	 */
	public function processValue(string|int $value): string|int
	{
		return $value;
	}

	private object $object;

}
