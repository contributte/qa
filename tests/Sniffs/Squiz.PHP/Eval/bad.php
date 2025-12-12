<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\Eval;

class BadExample
{
	public function execute(string $code): void
	{
		eval($code);
	}

	public function process(string $expression): void
	{
		$result = eval('return ' . $expression . ';');
	}
}
