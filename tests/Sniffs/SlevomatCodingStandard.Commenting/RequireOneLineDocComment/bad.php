<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\RequireOneLineDocComment;

class BadExample
{

	/**
	 * @return void
	 */
	public function simpleMethod(): void
	{
	}

	/**
	 * @param string $value
	 */
	public function withParam(string $value): void
	{
	}

}
