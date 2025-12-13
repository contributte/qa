<?php

// Test: linesCountBetweenDescriptionAndAnnotations=0
namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DocCommentSpacing;

class Example1
{

	/**
	 * Description of the method.
	 * @param string $name The name parameter
	 * @return string
	 */
	public function method(string $name): string
	{
		return $name;
	}

}
