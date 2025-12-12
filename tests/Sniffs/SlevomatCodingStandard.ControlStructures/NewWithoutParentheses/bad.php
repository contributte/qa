<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\NewWithoutParentheses;

class BadExample
{

	public function test(): void
	{
		$obj = new \stdClass();

		$exception = new \RuntimeException();

		$date = new \DateTime();
	}

}
