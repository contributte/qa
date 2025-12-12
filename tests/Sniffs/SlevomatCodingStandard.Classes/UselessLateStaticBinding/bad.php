<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\UselessLateStaticBinding;

final class BadExample
{

	public function create(): self
	{
		return new static();
	}

	public static function getInstance(): self
	{
		return new static();
	}

}
