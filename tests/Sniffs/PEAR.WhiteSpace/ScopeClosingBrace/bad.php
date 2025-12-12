<?php declare(strict_types = 1);

class BadScopeClosingBrace
{

	public function test(): void
	{
		if (true) {
			echo 'yes'; }

		while (false) {
			echo 'no'; }

		foreach ([1, 2, 3] as $item) {
			echo $item; }
	}

}
