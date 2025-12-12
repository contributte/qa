<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\NewWithParentheses;

class BadExample
{

	public function test(): void
	{
		$obj = new \stdClass;

		$exception = new \RuntimeException;

		$date = new \DateTime;
	}

}
