<?php declare(strict_types = 1);

class GoodFunctionCallSignature
{

	public function test(): void
	{
		$result = $this->someFunction('arg1', 'arg2', 'arg3');

		$result = $this->multiLineCall(
			'argument1',
			'argument2',
			'argument3'
		);

		printf('%s', 'test');
	}

	private function someFunction(string $a, string $b, string $c): string
	{
		return $a . $b . $c;
	}

	private function multiLineCall(string $a, string $b, string $c): string
	{
		return $a . $b . $c;
	}

}
