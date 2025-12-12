<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\LanguageConstructSpacing;

class GoodExample
{
	public function process(): void
	{
		echo 'Hello';
		print 'World';
		return;

		include 'file.php';
		require 'another.php';
		include_once 'once.php';
		require_once 'required.php';
	}
}
