<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Complexity\Cognitive;

class GoodExample
{

	public function simpleMethod(int $value): int
	{
		return $value * 2;
	}

	public function withCondition(int $value): int
	{
		if ($value > 0) {
			return $value;
		}

		return 0;
	}

}
