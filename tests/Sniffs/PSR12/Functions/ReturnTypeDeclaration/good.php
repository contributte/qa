<?php declare(strict_types = 1);

// PSR-12 compliant return type declarations - exactly one space before colon, no space after

function test(): string
{
	return 'test';
}

class Test
{
	public function method(): int
	{
		return 1;
	}

	public function nullable(): ?array
	{
		return null;
	}

	public function multiline(
		string $param
	): string {
		return $param;
	}
}
