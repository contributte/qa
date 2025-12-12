<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ControlSignature;

class GoodExample
{
	public function process(): void
	{
		$condition = true;
		$value = 5;

		if ($condition) {
			// code
		}

		if ($condition) {
			// code
		} else {
			// other code
		}

		if ($condition) {
			// code
		} elseif ($value > 0) {
			// other code
		} else {
			// default code
		}

		while ($condition) {
			// code
		}

		do {
			// code
		} while ($condition);

		for ($i = 0; $i < 10; $i++) {
			// code
		}

		foreach ([1, 2, 3] as $item) {
			// code
		}

		switch ($value) {
			case 1:
				// code
				break;
			default:
				// default code
		}

		try {
			// code
		} catch (\Exception $e) {
			// handle exception
		}
	}
}
