<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\FunctionOpeningBraceSpace;

class BadExample
{
	public function processFirst(): void
	{

		$this->doSomething();
	}

	public function processSecond(): void
	{


		$result = $this->calculate();
		return;
	}

	private function calculate(): int
	{

		return 42;
	}
}
