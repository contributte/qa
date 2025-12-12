<?php declare(strict_types = 1);

class Product
{

	private const DEFAULT_PRICE = 10.0;

	private static int $counter = 0;

	public static function create(): self
	{
		self::$counter++;
		return new self();
	}

	public function getPrice(): float
	{
		return self::DEFAULT_PRICE;
	}

	public static function getCounter(): int
	{
		return self::$counter;
	}

}
