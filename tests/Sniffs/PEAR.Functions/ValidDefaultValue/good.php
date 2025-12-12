<?php declare(strict_types = 1);

class GoodValidDefaultValue
{

	public function test(string $name = 'default', int $age = 0, ?array $options = null): void
	{
	}

	public function testWithConstants(int $value = self::DEFAULT_VALUE): void
	{
	}

	private const DEFAULT_VALUE = 10;

}
