<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\OperatorSpacing;

class BadExample
{
	public function process(): void
	{
		$a = 1+2;
		$b = 3- 4;
		$c = 5 *6;
		$d = 7/8;
		$e = $a===$b;
		$f = $c !==$d;
		$g = $a&&$b;
		$h = $c|| $d;
	}
}
