<?php declare(strict_types = 1);

// Opening brace on same line as class - correct
class GoodClass {
	public function method(): void
	{
		// Method body
	}
}

interface GoodInterface {
	public function method(): void;
}

trait GoodTrait {
	public function method(): void
	{
		// Method body
	}
}
