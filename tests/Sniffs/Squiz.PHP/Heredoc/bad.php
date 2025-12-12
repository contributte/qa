<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\Heredoc;

class BadExample
{
	public function getHeredocString(): string
	{
		$name = 'World';
		return <<<EOT
Hello, $name!
This is a heredoc string.
Variables like $name are parsed.
EOT;
	}

	public function getAnotherHeredoc(): string
	{
		return <<<HTML
<div>This is heredoc HTML</div>
HTML;
	}
}
