<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Scope\MethodScope;

class GoodExample
{
	public function publicMethod(): void
	{
	}

	protected function protectedMethod(): void
	{
	}

	private function privateMethod(): void
	{
	}
}
