<?php declare(strict_types = 1);

// Bad - constants without visibility

class Test
{
	const NO_VISIBILITY = 'bad';

	const ANOTHER_CONSTANT = 'also bad';

	const int TYPED_NO_VISIBILITY = 42;
}
