<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\NamingConventions\ValidVariableName;

class GoodExample
{
	private string $userName;
	protected int $itemCount;
	public array $dataList;

	public function process(): void
	{
		$localVariable = 'test';
		$anotherVar = 123;
		$validName = true;
	}
}
