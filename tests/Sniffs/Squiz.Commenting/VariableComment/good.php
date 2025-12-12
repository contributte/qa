<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\VariableComment;

class GoodExample
{

	/**
	 * @var string
	 */
	private string $name;

	/**
	 * @var int
	 */
	private int $age;

	/**
	 * @var array<string>
	 */
	private array $items;

	/**
	 * @var bool
	 */
	protected bool $isActive;

}
