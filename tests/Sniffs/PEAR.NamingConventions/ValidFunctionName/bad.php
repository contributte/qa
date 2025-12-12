<?php declare(strict_types = 1);

class BadValidFunctionName
{

	public function Test_Method(): void
	{
	}

	public function another_invalid_method(): void
	{
	}

	protected function Protected_Method(): void
	{
	}

	private function _privateMethod(): void
	{
	}

}
