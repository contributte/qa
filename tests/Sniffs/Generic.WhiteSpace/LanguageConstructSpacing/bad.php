<?php declare(strict_types = 1);

namespace Tests\Sniffs\Generic\WhiteSpace\LanguageConstructSpacing;

class BadExample
{
	public function process(): void
	{
		echo  'Hello';
		print   'World';
		return  ;

		include  'file.php';
		require   'another.php';
		include_once  'once.php';
		require_once   'required.php';
	}
}
