<?php declare(strict_types = 1);

// Bad closing brace - extra content after closing brace

class BadClass
{
	public function test(): void
	{
	}
} // comment after brace

interface BadInterface
{
	public function method(): void;
} /* comment */
