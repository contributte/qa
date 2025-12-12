<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DisallowCommentAfterCode;

class BadExample
{

	public function method(): void
	{
		$value = 'test'; // Inline comment after code
		echo $value; // Another inline comment
	}

}
