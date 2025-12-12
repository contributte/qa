<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ClassStructure;

class BadExample
{

	private string $property;

	private const CONSTANT = 'value';

	use SomeTrait;

	private function privateMethod(): void
	{
	}

	public function __construct()
	{
	}

	protected function protectedMethod(): void
	{
	}

	public function publicMethod(): void
	{
	}

}

trait SomeTrait
{
}
