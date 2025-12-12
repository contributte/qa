<?php declare(strict_types = 1);

class Product
{

	public string $name;
	public float $price;

	public function __construct(string $name, float $price)
	{
		$this->name = $name;
		$this->price = $price;
	}

}

$product = new Product('Laptop', 999.99);
$value = $product->name;
$cost = $product->price;
