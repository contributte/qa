<?php declare(strict_types = 1);

// Test: linesCountBeforeFirstUse=0, linesCountAfterLastUse=0
trait TestTrait
{

	public function traitMethod(): void
	{
	}

}

class Example
{
	use TestTrait;
}
