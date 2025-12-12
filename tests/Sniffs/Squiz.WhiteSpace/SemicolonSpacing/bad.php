<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\SemicolonSpacing;

class BadExample
{
	public function process(): void
	{
		$value = 1 ;
		$another = 2  ;
		$result = $value + $another ;
		echo $result ;
	}
}
