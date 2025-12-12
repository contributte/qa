<?php declare(strict_types = 1);

class BadExample
{

	public function processValue(mixed $value): mixed
	{
		return $value;
	}

	public function processData(mixed $data): array
	{
		return (array) $data;
	}

	/**
	 * @param mixed $value
	 * @return mixed
	 */
	public function handleMixed(mixed $value): mixed
	{
		return $value;
	}

	private mixed $data;

}
