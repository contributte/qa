<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

// Unsorted uses - violation
use DateTime;
use ArrayObject;

// Unused use - violation
use Exception;

// Group use - violation
use Foo\{Bar, Baz};

// Use starting with backslash - violation
use \stdClass;

class NamespacesFixture
{

	public function test(): void
	{
		// Fully qualified name without use - violation
		$date = new \DateTimeImmutable();
	}

}
