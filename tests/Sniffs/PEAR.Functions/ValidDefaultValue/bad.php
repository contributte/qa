<?php declare(strict_types = 1);

class BadValidDefaultValue
{

	public function test(string $name = getName(), int $age = 0): void
	{
	}

	public function testWithArray(array $options = [1, 2, 3]): void
	{
	}

	private function getName(): string
	{
		return 'test';
	}

}
