<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\DuplicateAssignmentToVariable;

class GoodExample
{

	public function process(): string
	{
		$value = $this->getValue();
		return $value;
	}

	private function getValue(): string
	{
		return 'value';
	}

}
