<?php declare(strict_types = 1);

// Bad - space between ? and type

function test(? string $param): ? int
{
	return null;
}

class Test
{
	public function method(? array $data): ? object
	{
		return null;
	}

	public function __construct(
		private ? string $name,
	) {
	}
}
