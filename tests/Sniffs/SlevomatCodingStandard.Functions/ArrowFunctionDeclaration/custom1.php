<?php declare(strict_types = 1);

// Test: spacesCountAfterKeyword=0, spacesCountBeforeArrow=0, spacesCountAfterArrow=0
namespace Tests\Sniffs\SlevomatCodingStandard\Functions\ArrowFunctionDeclaration;

class Example1
{

	public function test(): void
	{
		$fn = fn(int $x): int=>$x * 2;

		$add = fn(int $a, int $b): int=>$a + $b;
	}

}
