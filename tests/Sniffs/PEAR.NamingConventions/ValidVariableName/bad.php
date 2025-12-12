<?php declare(strict_types = 1);

class BadValidVariableName
{

	private string $User_Name;

	private int $_userAge;

	public function test(): void
	{
		$Local_Variable = 'test';
		$Another_Var = 123;
	}

}
