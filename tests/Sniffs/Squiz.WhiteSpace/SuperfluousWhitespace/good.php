<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\SuperfluousWhitespace;

class GoodExample
{
	public function process(): void
	{
		$value = 1;
		$another = 2;

		if ($value > 0) {
			echo 'Positive';
		}
	}
}
