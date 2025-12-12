<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\NamingConventions\ValidVariableName;

class BadExample
{
	private string $user_name;
	protected int $Item_Count;
	public array $DATA_LIST;

	public function process(): void
	{
		$local_variable = 'test';
		$Another_Var = 123;
		$INVALID_NAME = true;
	}
}
