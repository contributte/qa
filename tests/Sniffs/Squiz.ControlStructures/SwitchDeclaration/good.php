<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\SwitchDeclaration;

class GoodExample
{

	public function process(int $value): string
	{
		switch ($value) {
			case 1:
				return 'one';
			case 2:
				return 'two';
			case 3:
				return 'three';
			default:
				return 'other';
		}
	}

}
