<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Files\LineLength;

class BadExample
{

	public function test(): void
	{
		$veryLongLineOfCodeThatExceedsTheMaximumLineLengthLimitAndShouldBeDetectedByTheSniffAsInvalidCodeThatNeedsToBeRefactoredIntoMultipleLines = 'long value';
		echo $veryLongLineOfCodeThatExceedsTheMaximumLineLengthLimitAndShouldBeDetectedByTheSniffAsInvalidCodeThatNeedsToBeRefactoredIntoMultipleLines;
	}

}
