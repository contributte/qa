<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\CastSpacing;

class BadExample
{
	public function process(): void
	{
		$int = ( int ) $value;
		$string = (string  ) $number;
		$bool = (  bool) $flag;
		$float = ( float ) $value;
	}
}
