<?php declare(strict_types = 1);

abstract class BaseClass
{

	abstract public function process(): void;

}

final class ConcreteClass
{

	public function execute(): void
	{
		// Implementation
	}

}
