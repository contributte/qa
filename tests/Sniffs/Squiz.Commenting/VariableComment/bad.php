<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Commenting\VariableComment;

class BadExample
{

	// Missing doc comment
	private string $name;

	/**
	 * Wrong var type
	 *
	 * @var string
	 */
	private int $age;

	/**
	 * Missing @var tag
	 */
	private array $items;

	/** @var int Wrong type */
	protected bool $isActive;

}
