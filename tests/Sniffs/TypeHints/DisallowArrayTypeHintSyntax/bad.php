<?php declare(strict_types = 1);

class BadExample
{

	/**
	 * @param array<string> $items
	 * @return array<int>
	 */
	public function processItems(array $items): array
	{
		return [1, 2, 3];
	}

	/**
	 * @param array<string, mixed> $config
	 */
	public function configure(array $config): void
	{
		// Configuration logic
	}

	/**
	 * @var array<string>
	 */
	private array $data = [];

}
