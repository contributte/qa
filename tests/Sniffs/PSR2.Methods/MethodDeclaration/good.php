<?php

namespace Tests\Sniffs\PSR2\Methods\MethodDeclaration;

abstract class GoodExample
{

	public function publicMethod(): void
	{
	}

	protected function protectedMethod(): void
	{
	}

	private function privateMethod(): void
	{
	}

	public static function publicStaticMethod(): void
	{
	}

	protected static function protectedStaticMethod(): void
	{
	}

	private static function privateStaticMethod(): void
	{
	}

	abstract public function abstractMethod(): void;

	final public function finalMethod(): void
	{
	}

}