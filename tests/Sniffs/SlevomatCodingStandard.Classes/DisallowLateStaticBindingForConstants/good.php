<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\DisallowLateStaticBindingForConstants;

class GoodExample
{

	private const CONSTANT = 'value';

	public function useConstant(): string
	{
		return self::CONSTANT;
	}

	public function compare(): bool
	{
		return self::CONSTANT === 'value';
	}

}
