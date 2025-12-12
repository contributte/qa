<?php declare(strict_types = 1);

class GoodMultiLineCondition
{

	public function test(): void
	{
		$a = 1;
		$b = 2;
		$c = 3;
		$d = 4;

		if (($a === 1)
			&& ($b === 2)
			&& ($c === 3)
			&& ($d === 4)
		) {
			echo 'all match';
		}

		while (($a < 10)
			&& ($b < 20)
		) {
			$a++;
			$b++;
		}
	}

}
