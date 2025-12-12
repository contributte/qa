<?php declare(strict_types = 1);

// PSR-12 compliant anonymous class declarations

$instance = new class {
	public function test(): void
	{
	}
};

$instance = new class extends BaseClass implements SomeInterface {
	public function test(): void
	{
	}
};

$instance = new class extends BaseClass implements
	SomeInterface,
	AnotherInterface
{
	public function test(): void
	{
	}
};

return new class($arg1, $arg2) {
	public function __construct(
		private string $arg1,
		private string $arg2,
	) {
	}
};
