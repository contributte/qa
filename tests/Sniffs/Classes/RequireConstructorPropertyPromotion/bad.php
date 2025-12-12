<?php declare(strict_types = 1);

class User
{

	private string $name;
	private int $age;
	private readonly string $email;

	public function __construct(string $name, int $age, string $email)
	{
		$this->name = $name;
		$this->age = $age;
		$this->email = $email;
	}

	public function getName(): string
	{
		return $this->name;
	}

}
