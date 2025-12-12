<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Classes\SelfMemberReference;

class BadExample
{

	public const NAME = 'test';

	public static function getInstance(): self
	{
		return new BadExample();
	}

	public function getConstant(): string
	{
		return BadExample::NAME;
	}

}
