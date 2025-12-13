<?php declare(strict_types = 1);

// Test: methods before properties (unusual ordering)
class Example
{

	public function method(): void
	{
	}

	private string $property;

}
