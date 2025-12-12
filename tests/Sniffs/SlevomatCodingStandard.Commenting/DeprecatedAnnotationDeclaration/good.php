<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\DeprecatedAnnotationDeclaration;

class GoodExample
{

	/**
	 * @deprecated Use newMethod() instead
	 */
	public function oldMethod(): void
	{
	}

	/**
	 * @deprecated since 2.0, will be removed in 3.0
	 */
	public function anotherOldMethod(): void
	{
	}

}
