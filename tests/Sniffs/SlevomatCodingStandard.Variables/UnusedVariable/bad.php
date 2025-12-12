<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\UnusedVariable;

class BadExample
{

	public function process(): string
	{
		$unused = 'never used';
		$value = $this->getValue();
		return $value;
	}

	private function getValue(): string
	{
		return 'value';
	}

}
