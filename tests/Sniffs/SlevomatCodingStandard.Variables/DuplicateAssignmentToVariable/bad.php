<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\DuplicateAssignmentToVariable;

class BadExample
{

	public function process(): string
	{
		$value = 'initial';
		$value = $this->getValue();
		return $value;
	}

	private function getValue(): string
	{
		return 'value';
	}

}
