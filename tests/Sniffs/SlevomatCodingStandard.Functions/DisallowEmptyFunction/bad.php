<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\DisallowEmptyFunction;

class BadExample
{

	public function emptyMethod(): void
	{
	}

	private function anotherEmpty(): int
	{
	}

}
