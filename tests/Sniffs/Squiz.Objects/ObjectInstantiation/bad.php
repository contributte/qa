<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Objects\ObjectInstantiation;

class BadExample
{
	public function create(): void
	{
		$object = new \stdClass;
		$another = new BadExample;
		$withParams = new \DateTime('now');
	}
}
