<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Objects\ObjectInstantiation;

class GoodExample
{
	public function create(): void
	{
		$object = new \stdClass();
		$another = new GoodExample();
		$withParams = new \DateTime('now');
	}
}
