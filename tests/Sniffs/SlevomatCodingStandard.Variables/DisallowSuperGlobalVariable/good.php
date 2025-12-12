<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Variables\DisallowSuperGlobalVariable;

class GoodExample
{

	public function __construct(
		private readonly array $request,
	)
	{
	}

	public function getParam(string $name): mixed
	{
		return $this->request[$name] ?? null;
	}

}
