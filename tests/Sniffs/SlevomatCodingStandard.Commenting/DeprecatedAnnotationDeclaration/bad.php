<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DeprecatedAnnotationDeclaration;

class BadExample
{

	/**
	 * @deprecated
	 */
	public function oldMethod(): void
	{
	}

}
