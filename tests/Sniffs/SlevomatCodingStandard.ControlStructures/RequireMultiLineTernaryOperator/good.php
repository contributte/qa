<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireMultiLineTernaryOperator;

class GoodExample
{

	public function test(): void
	{
		$value = true;

		$result = $value ? 'yes' : 'no';

		$longConditionResult = $this->someVeryLongConditionThatExceedsLineLength()
			? 'this is a very long true value'
			: 'this is a very long false value';
	}

	private function someVeryLongConditionThatExceedsLineLength(): bool
	{
		return true;
	}

}
