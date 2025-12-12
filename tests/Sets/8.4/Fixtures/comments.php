<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

/**
 * @author John Doe - forbidden annotation
 * @copyright 2024 - forbidden annotation
 * @package Tests - forbidden annotation
 * @since 1.0 - forbidden annotation
 * @todo Fix this - forbidden annotation
 */
class CommentsFixture
{

	/**
	 * @var string
	 * This should be one-line property doc comment - violation
	 */
	public string $property;

	/**
	 * Constructor.
	 * Forbidden comment pattern - violation
	 */
	public function __construct()
	{
	}

	/**
	 * Name getter.
	 * Forbidden comment pattern - violation
	 */
	public function getName(): string
	{
		return 'test';
	}

	/**
	 * @return string
	 * Useless function doc comment - violation (return type already declared)
	 */
	public function getValue(): string
	{
		return 'value';
	}

}
