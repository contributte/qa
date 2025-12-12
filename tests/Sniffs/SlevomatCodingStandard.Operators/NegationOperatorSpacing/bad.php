<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Operators\NegationOperatorSpacing;

class BadExample
{

	public function test(): void
	{
		$value = true;

		if (!$value) {
			echo 'false';
		}

		$result = !$this->check();
	}

	private function check(): bool
	{
		return true;
	}

}
