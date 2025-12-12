<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\RequireOneLineDocComment;

class GoodExample
{

	/** @return void */
	public function simpleMethod(): void
	{
	}

	/** @param string $value */
	public function withParam(string $value): void
	{
	}

}
