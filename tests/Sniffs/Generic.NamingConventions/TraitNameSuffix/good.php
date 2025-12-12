<?php declare(strict_types = 1);

// Traits with "Trait" suffix - correct
trait TimestampableTrait
{

	private $createdAt;

	private $updatedAt;

}

trait LoggableTrait
{

	public function log($message)
	{
		// Log implementation
	}

}

trait SingletonTrait
{

	private static $instance;

}
