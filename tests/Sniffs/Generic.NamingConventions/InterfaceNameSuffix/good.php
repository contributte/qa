<?php declare(strict_types = 1);

// Interfaces with "Interface" suffix - correct
interface AnimalInterface
{

	public function makeSound();

}

interface VehicleInterface
{

	public function drive();

}

interface RepositoryInterface
{

	public function save($entity);

}
