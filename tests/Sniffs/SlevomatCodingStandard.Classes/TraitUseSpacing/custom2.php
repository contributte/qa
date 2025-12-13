<?php declare(strict_types = 1);

// Test: linesCountBeforeFirstUse=2, linesCountBetweenUses=1, linesCountAfterLastUse=2
trait TestTrait1
{

	public function method1(): void
	{
	}

}

trait TestTrait2
{

	public function method2(): void
	{
	}

}

class Example
{


	use TestTrait1;

	use TestTrait2;


	public function process(): void
	{
	}

}
