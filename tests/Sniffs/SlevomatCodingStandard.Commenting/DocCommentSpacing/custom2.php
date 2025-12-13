<?php

// Test: linesCountBetweenDescriptionAndAnnotations=2, linesCountBetweenDifferentAnnotationsTypes=1
namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DocCommentSpacing;

class Example2
{

	/**
	 * Description of the method.
	 *
	 *
	 * @param string $name The name parameter
	 *
	 * @return string
	 */
	public function method(string $name): string
	{
		return $name;
	}

}
