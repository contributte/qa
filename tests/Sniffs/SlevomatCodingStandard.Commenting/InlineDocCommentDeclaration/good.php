<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Commenting\InlineDocCommentDeclaration;

class GoodExample
{

	public function method(): void
	{
		/** @var \DateTime $date */
		$date = $this->getDate();

		/** @var string $name */
		$name = $this->getName();
	}

	private function getDate(): mixed
	{
		return new \DateTime();
	}

	private function getName(): mixed
	{
		return 'name';
	}

}
