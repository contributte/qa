<?php declare(strict_types = 1);

class GoodExample
{

	/**
	 * @param string[] $items
	 * @return int[]
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
	 * @var array<int, string>
	 */
	private array $data = [];

}
