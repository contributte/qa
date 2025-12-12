<?php declare(strict_types = 1);

// PSR-12 compliant nullable type declarations - no space between ? and type

function test(?string $param): ?int
{
	return null;
}

class Test
{
	public function method(?array $data): ?object
	{
		return null;
	}

	public function __construct(
		private ?string $name,
		private ?int $age,
	) {
	}
}
