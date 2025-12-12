<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\FunctionSpacing;

class BadExample
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



	private function fourthFunction(): string
	{
		return 'test';
	}
}
