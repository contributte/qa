<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\ScopeKeywordSpacing;

class GoodExample
{
	public function process(): void
	{
		if (true) {
			$value = 1;
		}

		while (false) {
			$value = 2;
		}

		foreach ([] as $item) {
			$value = 3;
		}

		for ($i = 0; $i < 10; $i++) {
			$value = 4;
		}
	}
}
