<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\PHP\EmbeddedPhp;

class GoodExample
{
	public function render(): void
	{
		echo '<div>';
		echo '<p>Hello World</p>';
		echo '</div>';
	}

	public function output(string $name): void
	{
		echo '<h1>' . htmlspecialchars($name) . '</h1>';
	}
}
