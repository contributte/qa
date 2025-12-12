<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\InlineIfDeclaration;

class BadExample
{

	public function process(int $value): string
	{
		// Inline if without proper formatting
		$result = $value > 0 ? 'positive' : 'negative';

		// Nested inline if
		$nested = $value > 10 ? 'high' : $value > 0 ? 'low' : 'zero';

		return $result;
	}

}
