<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowSizeFunctionsInLoops;

class GoodExample
{
	public function iterate(array $items): void
	{
		$count = count($items);

		for ($i = 0; $i < $count; $i++) {
			// Process item
		}
	}

	public function loop(array $data): void
	{
		$length = count($data);
		$index = 0;

		while ($index < $length) {
			$index++;
		}
	}
}
