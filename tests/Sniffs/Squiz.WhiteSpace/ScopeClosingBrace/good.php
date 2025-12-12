<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\ScopeClosingBrace;

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
	}
}
