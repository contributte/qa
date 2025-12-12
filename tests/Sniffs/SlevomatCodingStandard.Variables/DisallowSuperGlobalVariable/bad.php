<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\DisallowSuperGlobalVariable;

class BadExample
{

	public function getParam(string $name): mixed
	{
		return $_GET[$name] ?? null;
	}

	public function postParam(string $name): mixed
	{
		return $_POST[$name] ?? null;
	}

}
