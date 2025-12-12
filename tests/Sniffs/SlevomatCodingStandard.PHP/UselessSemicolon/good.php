<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\UselessSemicolon;

class GoodExample
{

	public function test(): void
	{
		$value = 5;

		if ($value > 0) {
			echo 'positive';
		}

		for ($i = 0; $i < 10; $i++) {
			echo $i;
		}
	}

}
