<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ElseIfDeclaration;

class BadExample
{

	public function process(int $value): string
	{
		if ($value > 10) {
			return 'high';
		} else if ($value > 5) {
			return 'medium';
		} else if ($value > 0) {
			return 'low';
		} else {
			return 'zero';
		}
	}

}
