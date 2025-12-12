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

class GoodExample extends BaseClass
{

	public function __construct()
	{
		parent::__construct();
	}

	public function method(): void
	{
		$value = 'start';

		parent::method();

		$value = 'end';
	}

	public function anotherMethod(): void
	{
		$value = 'start';

		parent::method();

		$value = 'end';
	}

}
