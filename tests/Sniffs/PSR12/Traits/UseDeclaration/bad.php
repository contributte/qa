<?php declare(strict_types = 1);

// Bad - incorrect trait use declarations

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
	use TraitA,TraitB;

	public function test(): void
	{
	}
}

class TestBadSpacing
{
	use TraitA  ,  TraitB;

	public function test(): void
	{
	}
}
