<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ClassStructure;

class GoodExample
{

	use SomeTrait;

	private const CONSTANT = 'value';

	private string $property;

	public function __construct()
	{
	}

	public function publicMethod(): void
	{
	}

	protected function protectedMethod(): void
	{
	}

	private function privateMethod(): void
	{
	}

}

trait SomeTrait
{
}
