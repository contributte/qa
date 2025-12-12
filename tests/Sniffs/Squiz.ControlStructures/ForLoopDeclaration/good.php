<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ForLoopDeclaration;

class GoodExample
{
	public function process(): void
	{
		for ($i = 0; $i < 10; $i++) {
			// code
		}

		for ($i = 0; $i < 10; $i += 2) {
			// code
		}

		for ($i = 10; $i > 0; $i--) {
			// code
		}

		for ($i = 0, $j = 0; $i < 10; $i++, $j++) {
			// code
		}

		for ($i = 0; $i < count($items); $i++) {
			// code
		}

		$length = 10;
		for ($i = 0; $i < $length; $i++) {
			// code
		}

		for ($i = 0; $i < 10 && $i < 20; $i++) {
			// code
		}

		for (; $i < 10; $i++) {
			// code
		}

		for ($i = 0; ; $i++) {
			// code
		}

		for ($i = 0; $i < 10; ) {
			// code
		}
	}
}
