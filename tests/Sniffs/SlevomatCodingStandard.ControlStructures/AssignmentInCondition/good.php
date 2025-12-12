<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\AssignmentInCondition;

class GoodExample
{

	public function method(): void
	{
		$value = $this->getValue();
		if ($value !== null) {
			echo $value;
		}
	}

	private function getValue(): ?string
	{
		return 'test';
	}

}
