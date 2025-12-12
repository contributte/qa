<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\AssignmentInCondition;

class BadExample
{

	public function method(): void
	{
		if (($value = $this->getValue()) !== null) {
			echo $value;
		}
	}

	private function getValue(): ?string
	{
		return 'test';
	}

}
