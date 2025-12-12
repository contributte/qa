<?php declare(strict_types = 1);

// Bad - compound namespace with depth greater than 2

namespace App\Model\{Entity\User, Repository\UserRepository, Service\UserService};

use Database\Connection;

class Test
{
	public function test(): void
	{
	}
}
