<?php declare(strict_types = 1);

// Abstract classes without "Abstract" prefix - violation
abstract class Animal
{

	abstract public function makeSound();

}

abstract class Vehicle
{

	abstract public function drive();

}

abstract class Controller
{

	abstract public function execute();

}
