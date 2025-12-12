<?php declare(strict_types = 1);

# Perl-style comment - violation
class Example
{

	public function test(): void
	{
		# Another Perl-style comment
		$x = 1;

		$y = 2; # Inline Perl comment
	}

}
