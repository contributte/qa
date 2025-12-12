<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\RequireExplicitAssertion;

use function assert;

class GoodExample
{

	public function example(mixed $value): void
	{
		assert($value instanceof \DateTime, 'Value must be DateTime');
		$date = $value;
	}

}
