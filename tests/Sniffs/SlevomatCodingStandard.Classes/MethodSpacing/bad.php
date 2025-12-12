<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\MethodSpacing;

class BadExample
{

	public function firstMethod(): void
	{
	}
	public function secondMethod(): void
	{
	}

	public function thirdMethod(): void
	{
	}


	private function privateMethod(): string
	{
		return 'result';
	}



	protected static function staticMethod(): int
	{
		return 42;
	}

}
