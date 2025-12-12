<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Functions\FunctionDeclaration;

class BadExample
{
	public function process() :void
	{
	}

	private function calculate(int $value) :int{
		return $value * 2;
	}

	protected static function getInstance():self
	{
		return new self();
	}
}
