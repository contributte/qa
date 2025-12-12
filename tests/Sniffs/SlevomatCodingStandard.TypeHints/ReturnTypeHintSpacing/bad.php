<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\TypeHints\ReturnTypeHintSpacing;

class BadExample
{

	public function getName():string
	{
		return 'name';
	}

	public function getAge() :int
	{
		return 25;
	}

}
