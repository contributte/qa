<?php

// Test: linesCountBefore=0, linesCountAfter=0
namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ParentCallSpacing;

class BaseClass1
{

	public function method(): void
	{
	}

}

class Example1 extends BaseClass1
{

	public function method(): void
	{
		$value = 'start';
		parent::method();
		$value = 'end';
	}

}
