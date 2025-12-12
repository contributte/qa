<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireMultiLineTernaryOperator;

class BadExample
{

	public function test(): void
	{
		$longConditionResult = $this->someVeryLongConditionThatExceedsLineLength() ? 'this is a very long true value that exceeds the limit' : 'this is a very long false value that exceeds the limit';
	}

	private function someVeryLongConditionThatExceedsLineLength(): bool
	{
		return true;
	}

}
