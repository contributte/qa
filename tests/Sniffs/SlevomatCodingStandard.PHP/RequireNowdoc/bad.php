<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\RequireNowdoc;

class BadExample
{

	public function test(): string
	{
		return <<<EOT
This is a heredoc string without variables.
EOT;
	}

}
