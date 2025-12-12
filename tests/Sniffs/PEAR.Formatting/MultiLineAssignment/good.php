<?php declare(strict_types = 1);

// Multi-line assignment properly indented
class Example
{

	public function test(): void
	{
		$variable
			= 'Value on different line';

		$other
			= 'Another value';
	}

}
