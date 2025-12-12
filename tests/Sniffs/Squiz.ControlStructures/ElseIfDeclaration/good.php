<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ElseIfDeclaration;

class GoodExample
{

	public function process(int $value): string
	{
		if ($value > 10) {
			return 'high';
		} elseif ($value > 5) {
			return 'medium';
		} elseif ($value > 0) {
			return 'low';
		} else {
			return 'zero';
		}
	}

}
