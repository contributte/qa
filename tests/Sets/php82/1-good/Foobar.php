<?php declare(strict_types = 1);

namespace Tests\Php82;

use Exception;

final class Foobar implements IFoobar
{

	use TFoo;

	public const FOO_LENGTH = 5;
	public const FOO_BAR = 'foo.bar';
	public const FOO_BAZ = [
		'first',
		'second',
	];

	/** @inject */
	public Foobar $service;

	/** @var array<string> */
	public array $foo = [];

	protected string $bar;

	private int $baz;

	public function __construct()
	{
		$this->foo = ['1', '2', '3'];
		$this->bar = 'bar';
		$this->baz = 0;

		$this->getSwitchCase();
	}

	public function isBaz(mixed $value): bool
	{
		if (is_bool($value)) {
			return true;
		}

		return $this->baz !== 0;
	}

	/**
	 * @return array<string>
	 */
	public function getArrayFunction(): array
	{
		return array_map(fn (string $val): string => mb_strtolower($val), $this->getForEach());
	}

	/**
	 * Needs implementation
	 *
	 * @param array<mixed>|null $baz
	 */
	public function interfaceMethod(string $foo, int $bar, ?array $baz = null): void
	{
		throw new Exception('Not yet implemented');
	}

	/**
	 * @return array<string>
	 */
	protected function getForEach(): array
	{
		$result = [];

		foreach ($this->foo as $foo) {
			if (strlen($foo) === self::FOO_LENGTH) {
				continue;
			}

			$result[] = $foo;
		}

		return $result;
	}

	private function getSwitchCase(): void
	{
		switch ($this->bar) {
			case 'case1':
				$this->baz = 1;

				break;
			case 'case2':
				$this->baz = 2;

				break;
			case 'case3':
				throw new Exception('Case 3 error');
			default:
				$this->baz = 4;
		}
	}

	private function ifElseStatement(): void
	{
		$this->foobar = 1;

		if ($this->bar === 'case1') {
			$this->baz = 1;
		} elseif ($this->bar === 'case2') {
			$this->baz = 2;
		} else {
			$this->baz = 3;
		}

		$this->bar = 'case3';
	}

}
