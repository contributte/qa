<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\EmptyCatchComment;

class GoodExample
{

	public function handleException(): void
	{
		try {
			$this->riskyOperation();
		} catch (\Exception $e) {
			// Exception is intentionally ignored because the operation is optional
		}
	}

	public function anotherExample(): void
	{
		try {
			$this->anotherRiskyOperation();
		} catch (\RuntimeException $e) {
			// Do nothing - this is expected in some cases
		}
	}

	private function riskyOperation(): void
	{
	}

	private function anotherRiskyOperation(): void
	{
	}

}
