<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\StaticClosure;

class GoodExample
{

	public function test(): void
	{
		$fn = static function (): int {
			return 42;
		};

		$arrow = static fn (): int => 42;

		$withUse = static function () use ($fn): int {
			return $fn();
		};
	}

	public function needsThis(): void
	{
		$fn = function (): string {
			return $this->getName();
		};
	}

	private function getName(): string
	{
		return 'test';
	}

}
