<?php declare(strict_types = 1);

class Example
{

	private string $name;
	protected int $count;
	private readonly float $value;

	public function __construct(string $name, int $count, float $value)
	{
		$this->name = $name;
		$this->count = $count;
		$this->value = $value;
	}

}
