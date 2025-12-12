<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DisallowCommentAfterCode;

class GoodExample
{

	public function method(): void
	{
		// This is a comment on its own line
		$value = 'test';

		// Another comment
		echo $value;
	}

}
