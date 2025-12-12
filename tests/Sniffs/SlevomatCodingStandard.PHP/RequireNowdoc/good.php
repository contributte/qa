<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\PHP\RequireNowdoc;

class GoodExample
{

	public function test(): string
	{
		return <<<'EOT'
This is a nowdoc string.
It does not parse variables like $this.
EOT;
	}

}
