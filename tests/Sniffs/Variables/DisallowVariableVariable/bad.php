<?php declare(strict_types = 1);

class BadExample
{

	public function processData(string $varName): mixed
	{
		$data = 'example';
		return $$varName;
	}

	public function setValue(string $name, mixed $value): void
	{
		$$name = $value;
	}

	public function dynamicAccess(): string
	{
		$var = 'test';
		$name = 'var';
		return $$name;
	}

	public function nestedVariable(): mixed
	{
		$a = 'b';
		$b = 'c';
		return $$a;
	}

}
