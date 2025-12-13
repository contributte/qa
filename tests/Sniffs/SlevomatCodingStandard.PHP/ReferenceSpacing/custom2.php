<?php declare(strict_types = 1);

// Test: spacesCountAfterReference=0 (default)
namespace Tests\Sniffs\SlevomatCodingStandard\PHP\ReferenceSpacing;

class Example2
{

	public function test(&$value): void
	{
		$value = 10;
	}

	public function another(int &$number): void
	{
		$number++;
	}

}
