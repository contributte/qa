<?php declare(strict_types = 1);

class User
{

	public string $name;
	public int $age;

	public function __construct(string $name, int $age)
	{
		$this->name = $name;
		$this->age = $age;
	}

}
