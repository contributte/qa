<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\EmbeddedPhp;

class BadExample
{
	public function render(): void
	{
		?>
		<div>
			<p>Hello World</p>
		</div>
		<?php
	}
}
