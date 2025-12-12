<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ClassMemberSpacing;

class BadExample
{

	private const CONSTANT = 'value';
	private string $property;

	public function __construct()
	{
	}


	public function method(): void
	{
	}
	public function anotherMethod(): void
	{
	}

}
