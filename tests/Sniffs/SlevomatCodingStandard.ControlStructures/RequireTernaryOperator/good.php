<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireTernaryOperator;

class GoodExample
{

	public function test(): string
	{
		$value = true;

		$result = $value ? 'yes' : 'no';

		return $result;
	}

	public function other(): int
	{
		$count = 5;

		return $count > 0 ? $count : 0;
	}

}
