<?php declare(strict_types = 1);

class BadScopeIndent
{

	public function test(): void
	{
		if (true) {
		echo 'bad indent';
			if (true) {
			echo 'bad indent';
					if (true) {
				echo 'bad indent';
					}
			}
		}

		foreach ([1, 2, 3] as $item) {
		echo $item;
		}
	}

}
