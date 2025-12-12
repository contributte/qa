<?php

namespace Tests\Sniffs\PSR2\Methods\MethodDeclaration;

abstract class BadExample
{

	static public function staticBeforeVisibility(): void
	{
	}

	static protected function staticBeforeProtected(): void
	{
	}

	private function _privateMethod(): void
	{
	}

	protected function _protectedMethod(): void
	{
	}

}
