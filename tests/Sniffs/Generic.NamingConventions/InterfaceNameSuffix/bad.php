<?php declare(strict_types = 1);

// Interfaces without "Interface" suffix - violation
interface Animal
{

	public function makeSound();

}

interface Vehicle
{

	public function drive();

}

interface Repository
{

	public function save($entity);

}
