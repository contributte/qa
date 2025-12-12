<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\FullyQualifiedGlobalFunctions;

class BadExample
{

	public function example(): void
	{
		$count = count([1, 2, 3]);
		$str = strtoupper('hello');
		$time = time();
		$array = array_map(fn($x) => $x * 2, [1, 2, 3]);
	}

}
