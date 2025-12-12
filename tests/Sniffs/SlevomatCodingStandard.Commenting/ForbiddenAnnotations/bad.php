<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\ForbiddenAnnotations;

/**
 * @author John Doe
 * @created 2024-01-01
 */
class BadExample
{

	/**
	 * @author Jane Doe
	 */
	public function method(): void
	{
	}

}
