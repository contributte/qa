<?php

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\BlockControlStructureSpacing;

class BadExample
{

	public function method(): void
	{
		$value = 1;
		if ($value > 0) {
			echo 'positive';
		}
		$result = 'done';
	}

	public function another(): void
	{
		$items = [1, 2, 3];
		foreach ($items as $item) {
			echo $item;
		}
		echo 'finished';
	}

}
