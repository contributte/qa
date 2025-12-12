<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\FullyQualifiedExceptions;

class GoodExample
{

	public function test(): void
	{
		throw new \RuntimeException('Error');
	}

	public function another(): void
	{
		try {
			$this->test();
		} catch (\Exception $e) {
			echo $e->getMessage();
		}
	}

}
