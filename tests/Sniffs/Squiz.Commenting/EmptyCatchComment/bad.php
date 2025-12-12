<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\EmptyCatchComment;

class BadExample
{

	public function handleException(): void
	{
		try {
			$this->riskyOperation();
		} catch (\Exception $e) {
		}
	}

	public function anotherExample(): void
	{
		try {
			$this->anotherRiskyOperation();
		} catch (\RuntimeException $e) {
			// Empty
		}
	}

	private function riskyOperation(): void
	{
	}

	private function anotherRiskyOperation(): void
	{
	}

}
