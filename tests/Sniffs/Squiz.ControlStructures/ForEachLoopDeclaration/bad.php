<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ForEachLoopDeclaration;

class BadExample
{
	public function process(): void
	{
		$items = [1, 2, 3];
		$assoc = ['a' => 1, 'b' => 2];

		foreach($items as $item) {
			// code
		}

		foreach ($items  as $item) {
			// code
		}

		foreach ($items as  $item) {
			// code
		}

		foreach ($items as $key=>$value) {
			// code
		}

		foreach ($items as $key =>$value) {
			// code
		}

		foreach ($items as $key=> $value) {
			// code
		}

		foreach ($assoc as $key  =>  $value) {
			// code
		}

		foreach ($items as&$item) {
			// code
		}

		foreach ($items as & $item) {
			// code
		}

		foreach ($items as $key =>&$value) {
			// code
		}
	}
}
