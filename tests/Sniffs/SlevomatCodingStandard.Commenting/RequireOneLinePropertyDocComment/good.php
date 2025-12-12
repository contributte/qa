<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\RequireOneLinePropertyDocComment;

class GoodExample
{

	/** @var string */
	public string $property;

	/** @var int */
	public int $count;

	/**
	 * This property needs a longer description
	 * that spans multiple lines.
	 * @var array<string, mixed>
	 */
	public array $data;

}
