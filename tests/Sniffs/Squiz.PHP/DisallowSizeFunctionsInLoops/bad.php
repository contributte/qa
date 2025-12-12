<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\DisallowSizeFunctionsInLoops;

class BadExample
{
	public function iterate(array $items): void
	{
		for ($i = 0; $i < count($items); $i++) {
			// Process item
		}
	}

	public function loop(array $data): void
	{
		$index = 0;

		while ($index < count($data)) {
			$index++;
		}
	}
}
