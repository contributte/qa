<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\FunctionSpacing;

class GoodExample
{
	public function firstFunction(): void
	{
		$this->doSomething();
	}

	public function secondFunction(): void
	{
		$this->doSomethingElse();
	}

	private function thirdFunction(): int
	{
		return 42;
	}
}
