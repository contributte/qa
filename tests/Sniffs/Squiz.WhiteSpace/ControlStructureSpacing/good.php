<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\WhiteSpace\ControlStructureSpacing;

class GoodExample
{
	public function process(): void
	{
		if ($condition) {
			$this->doSomething();
		}

		foreach ($items as $item) {
			$this->process($item);
		}

		while ($running) {
			$this->execute();
		}

		for ($i = 0; $i < 10; $i++) {
			$this->iterate();
		}
	}
}
