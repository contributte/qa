<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\Heredoc;

class GoodExample
{
	public function getNowdocString(): string
	{
		return <<<'EOT'
This is a nowdoc string.
Variables like $this are not parsed.
Use nowdoc instead of heredoc.
EOT;
	}

	public function getSimpleString(): string
	{
		return 'This is a simple string';
	}
}
