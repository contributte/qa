<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\DisallowLateStaticBindingForConstants;

class BadExample
{

	private const CONSTANT = 'value';

	public function useConstant(): string
	{
		return static::CONSTANT;
	}

	public function compare(): bool
	{
		return static::CONSTANT === 'value';
	}

}
