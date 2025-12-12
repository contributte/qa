<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\NewWithParentheses;

class GoodExample
{

	public function test(): void
	{
		$obj = new \stdClass();

		$exception = new \RuntimeException();

		$date = new \DateTime();

		$dateWithArg = new \DateTime('now');
	}

}
