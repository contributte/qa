<?php

// Test: linesCountBefore=2, linesCountAfter=2
namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ParentCallSpacing;

class BaseClass2
{

	public function method(): void
	{
	}

}

class Example2 extends BaseClass2
{

	public function method(): void
	{
		$value = 'start';


		parent::method();


		$value = 'end';
	}

}
