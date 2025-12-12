<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\FullyQualifiedGlobalConstants;

class GoodExample
{

	public function example(): void
	{
		$max = \PHP_INT_MAX;
		$pi = \M_PI;
		$value = \true;
		$none = \null;
		$nope = \false;
	}

}
