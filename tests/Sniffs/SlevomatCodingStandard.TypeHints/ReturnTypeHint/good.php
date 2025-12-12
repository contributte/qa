<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\ReturnTypeHint;

class GoodExample
{

	public function getName(): string
	{
		return 'name';
	}

	public function getAge(): int
	{
		return 25;
	}

	public function getItems(): array
	{
		return [];
	}

}
