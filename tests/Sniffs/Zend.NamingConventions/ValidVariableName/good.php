<?php declare(strict_types = 1);

namespace Tests\Sniffs\Zend\NamingConventions\ValidVariableName;

class GoodExample
{
	private string $_privateVariable;

	protected int $_protectedVariable;

	public bool $publicVariable;

	public function goodMethod(): void
	{
		$localVariable = 'test';
		$anotherVariable = 42;
		$validName = true;
	}
}
