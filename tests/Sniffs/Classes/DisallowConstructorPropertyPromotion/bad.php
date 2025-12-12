<?php declare(strict_types = 1);

class User
{

	public function __construct(
		private string $name,
		private int $age
	)
	{
	}

	public function getName(): string
	{
		return $this->name;
	}

}
