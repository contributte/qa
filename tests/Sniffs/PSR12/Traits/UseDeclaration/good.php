<?php declare(strict_types = 1);

// PSR-12 compliant trait use declarations

trait TraitA
{
	public function methodA(): void
	{
	}
}

trait TraitB
{
	public function methodB(): void
	{
	}
}

class Test
{
	use TraitA;
	use TraitB;

	public function test(): void
	{
	}
}

class TestMultiple
{
	use TraitA, TraitB;

	public function test(): void
	{
	}
}

class TestWithInsteadOf
{
	use TraitA, TraitB {
		TraitB::methodB insteadof TraitA;
		TraitA::methodA as methodAAlias;
	}
}
