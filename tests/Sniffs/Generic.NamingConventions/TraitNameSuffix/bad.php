<?php declare(strict_types = 1);

// Traits without "Trait" suffix - violation
trait Timestampable
{

	private $createdAt;

	private $updatedAt;

}

trait Loggable
{

	public function log($message)
	{
		// Log implementation
	}

}

trait Singleton
{

	private static $instance;

}
