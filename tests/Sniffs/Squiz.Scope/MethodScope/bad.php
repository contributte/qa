<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Scope\MethodScope;

class BadExample
{
	function methodWithoutVisibility(): void
	{
	}
}
