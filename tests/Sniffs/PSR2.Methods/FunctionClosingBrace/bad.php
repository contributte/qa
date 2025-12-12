<?php

namespace Tests\Sniffs\PSR2\Methods\FunctionClosingBrace;

class BadExample
{

	public function notOnOwnLine(): void
	{
		$result = 'test'; }

	public function extraBlankLine(): void
	{
		$result = 'test';

	}

	public function multipleBlankLines(): void
	{
		$result = 'test';


	}

}