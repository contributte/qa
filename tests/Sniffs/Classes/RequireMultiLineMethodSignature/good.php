<?php declare(strict_types = 1);

class Calculator
{

	public function calculateTotalWithTaxAndDiscountAndShipping(
		float $price,
		float $taxRate,
		float $discountPercentage,
		float $shippingCost
	): float
	{
		return ($price * (1 + $taxRate) * (1 - $discountPercentage / 100)) + $shippingCost;
	}

	public function processComplexOperation(
		string $parameter1,
		int $parameter2,
		bool $parameter3,
		array $parameter4
	): array
	{
		return [];
	}

}
