<?php declare(strict_types = 1);

namespace Tests\Sniffs\Zend\Files\ClosingTag;

class BadExample
{
	public function someMethod(): void
	{
		echo 'Has closing tag';
	}
}
?>
