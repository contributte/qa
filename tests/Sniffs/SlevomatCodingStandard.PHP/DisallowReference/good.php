<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\DisallowReference;

class GoodExample
{

	public function test(): void
	{
		$value = 5;
		$copy = $value;

		$array = [1, 2, 3];

		foreach ($array as $item) {
			echo $item;
		}
	}

}
