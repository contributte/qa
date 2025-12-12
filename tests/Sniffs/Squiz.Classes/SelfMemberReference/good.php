<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Classes\SelfMemberReference;

class GoodExample
{

	public const NAME = 'test';

	public static function getInstance(): self
	{
		return new self();
	}

	public function getConstant(): string
	{
		return self::NAME;
	}

}
