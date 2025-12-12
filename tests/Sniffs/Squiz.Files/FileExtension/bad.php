<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Files\FileExtension;

class BadExample
{

	public function process(): void
	{
		// This test requires configuration to fail
		// The sniff checks if file extension matches expected pattern
	}

}
