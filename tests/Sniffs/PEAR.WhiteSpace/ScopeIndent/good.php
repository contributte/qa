<?php declare(strict_types = 1);

class GoodScopeIndent
{

	public function test(): void
	{
		if (true) {
			echo 'level 1';
			if (true) {
				echo 'level 2';
				if (true) {
					echo 'level 3';
				}
			}
		}

		foreach ([1, 2, 3] as $item) {
			echo $item;
		}
	}

}
