<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Scope\MemberVarScope;

class GoodExample
{
	public string $publicProperty;

	protected int $protectedProperty;

	private bool $privateProperty;
}
