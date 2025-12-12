<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\InlineIfDeclaration;

class GoodExample
{

	public function process(int $value): string
	{
		// Single line inline if
		$result = ($value > 0)
			? 'positive'
			: 'negative';

		return $result;
	}

}
