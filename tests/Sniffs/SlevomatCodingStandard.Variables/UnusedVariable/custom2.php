<?php declare(strict_types = 1);

// Test: ignoreUnusedValuesWhenOnlyKeysAreUsedInForeach=false
class Example
{

	public function process(): void
	{
		$data = ['a' => 1, 'b' => 2];

		foreach ($data as $key => $value) {
			echo $key;
		}
	}

}
