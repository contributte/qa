<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\UselessFunctionDocComment;

class GoodExample
{

	public function method(string $name): string
	{
		return $name;
	}

	/**
	 * @param array<string, int> $data Complex type that needs documentation
	 */
	public function withComplexType(array $data): void
	{
	}

	/**
	 * @throws \RuntimeException When something goes wrong
	 */
	public function throwing(): void
	{
		throw new \RuntimeException();
	}

}
