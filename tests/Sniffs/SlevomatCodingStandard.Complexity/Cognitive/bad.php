<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Complexity\Cognitive;

class BadExample
{

	public function complexMethod(int $value, bool $flag, ?string $text): mixed
	{
		if ($value > 0) {
			if ($flag) {
				for ($i = 0; $i < 10; $i++) {
					if ($i % 2 === 0) {
						if ($text !== null) {
							while (strlen($text) > 0) {
								if (str_contains($text, 'x')) {
									return $text;
								}
								$text = substr($text, 1);
							}
						}
					}
				}
			} elseif ($value > 100) {
				return null;
			}
		}

		return 0;
	}

}
