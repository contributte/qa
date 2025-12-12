<?php declare(strict_types = 1);

class GoodExample
{

	public function processValue(string|int $value): string|int
	{
		return $value;
	}

	public function getData(): array|null
	{
		return null;
	}

	/**
	 * @param string|int|bool $value
	 * @return string|int|bool
	 */
	public function handleMultiple(string|int|bool $value): string|int|bool
	{
		return $value;
	}

	private string|int|null $data;

	public function getObject(): object|string
	{
		return 'test';
	}

}
