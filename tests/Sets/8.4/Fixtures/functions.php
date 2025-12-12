<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

class FunctionsFixture
{

	public function test(): void
	{
		// Should use arrow function - violation
		$fn = function ($x) {
			return $x * 2;
		};

		// Unused inherited variable - violation
		$unused = 1;
		$closure = function () use ($unused) {
			return 'test';
		};

		// Useless parameter default value - violation
		$this->uselessDefault('value');

		// Reference usage - violation
		$arr = [1, 2, 3];
		foreach ($arr as &$item) {
			$item *= 2;
		}
	}

	// Empty function - violation
	public function emptyFunction(): void
	{
	}

	// Useless default value (required param after optional) - violation
	public function uselessDefault(string $required, string $optional = 'default'): void
	{
	}

}

// Global function - violation
function globalFunction(): void
{
}
