<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\GlobalKeyword;

class GoodExample
{
	private int $count = 0;

	public function increment(): void
	{
		$this->count++;
	}

	public function getCount(): int
	{
		return $this->count;
	}
}
