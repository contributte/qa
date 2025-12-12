<?php declare(strict_types = 1);

namespace Tests\Sniffs\Zend\NamingConventions\ValidVariableName;

class BadExample
{
	private string $PrivateVariable;

	protected int $Protected_Variable;

	public bool $Public_Variable;

	public function badMethod(): void
	{
		$LocalVariable = 'test';
		$Another_Variable = 42;
		$Invalid_Name = true;
	}
}
