<?php

namespace Tests\Sniffs\PSR2\Methods\FunctionClosingBrace;

class GoodExample
{

	public function simpleFunction(): void
	{
		$result = 'test';
	}

	public function nestedBlocks(): void
	{
		if (true) {
			$value = 1;
		}
	}

	public function multipleStatements(): void
	{
		$a = 1;
		$b = 2;
		$c = 3;
	}

	public function emptyFunction(): void
	{
	}

	public function withReturn(): int
	{
		return 42;
	}

}

function standaloneFunction(): void
{
	echo 'test';
}