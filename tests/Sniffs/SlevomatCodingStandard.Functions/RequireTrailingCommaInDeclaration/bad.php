<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Functions\RequireTrailingCommaInDeclaration;

class BadExample
{

	public function method(
		string $arg1,
		string $arg2,
		string $arg3
	): void {
	}

}
