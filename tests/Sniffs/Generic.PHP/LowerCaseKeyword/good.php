<?php declare(strict_types = 1);

// Using lowercase keywords - correct
class GoodExample
{

	public function testMethod(): void
	{
		if (true) {
			echo 'test';
		} else {
			foreach ([1, 2, 3] as $num) {
				while ($num > 0) {
					break;
				}
			}
		}
	}

}
