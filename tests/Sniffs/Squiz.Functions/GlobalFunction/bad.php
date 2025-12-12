<?php declare(strict_types = 1);

function globalHelper(): void
{
}

function anotherGlobalFunction(int $value): int
{
	return $value * 2;
}

class BadExample
{
	public function process(): void
	{
	}
}
