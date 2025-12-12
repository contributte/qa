<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\ClassConstantVisibility;

class BadExample
{

	const NO_VISIBILITY = 'bad';

	const ANOTHER_CONSTANT = 'also bad';

	const int TYPED_NO_VISIBILITY = 42;

}
