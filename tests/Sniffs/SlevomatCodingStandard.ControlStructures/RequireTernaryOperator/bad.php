<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\ControlStructures\RequireTernaryOperator;

class BadExample
{

	public function test(): string
	{
		$value = true;

		if ($value) {
			$result = 'yes';
		} else {
			$result = 'no';
		}

		return $result;
	}

	public function other(): int
	{
		$count = 5;

		if ($count > 0) {
			return $count;
		} else {
			return 0;
		}
	}

}
