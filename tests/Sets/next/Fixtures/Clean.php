<?php declare(strict_types = 1);

namespace Tests\Fixtures;

class Clean
{

	public const FOO = 'bar';

	public string $property;

	public function getValue(): string
	{
		return $this->property ?? 'default';
	}

}
