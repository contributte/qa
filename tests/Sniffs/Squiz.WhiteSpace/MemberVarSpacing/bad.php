<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\MemberVarSpacing;

class BadExample
{
	public string $firstProperty;
	protected int $secondProperty;


	private bool $thirdProperty;
}
