<?php declare(strict_types = 1);

namespace Tests\Next;

interface IFoobar
{

	/**
	 * @param array<mixed>|null $baz
	 */
	public function interfaceMethod(string $foo, int $bar, ?array $baz = null): void;

}
