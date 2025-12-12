<?php declare(strict_types = 1);

class Product
{

	private const DEFAULT_PRICE = 10.0;

	private static int $counter = 0;

	public static function create(): Product
	{
		Product::$counter++;
		return new Product();
	}

	public function getPrice(): float
	{
		return Product::DEFAULT_PRICE;
	}

	public static function getCounter(): int
	{
		return Product::$counter;
	}

}
