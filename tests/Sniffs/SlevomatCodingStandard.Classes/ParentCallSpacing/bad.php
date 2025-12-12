<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ParentCallSpacing;

class BaseClass
{

	public function __construct()
	{
	}

	public function method(): void
	{
	}

}

class BadExample extends BaseClass
{

	public function method(): void
	{
		$value = 'start';
		parent::method();

		$after = 'value';
	}

	public function anotherMethod(): void
	{
		$before = 'value';

		parent::method();
		$value = 'end';
	}

	public function yetAnotherMethod(): void
	{
		$before = 'value';
		parent::method();
		$after = 'value';
	}

}
