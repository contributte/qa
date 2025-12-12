<?php declare(strict_types = 1);

// All parameters are used - correct
function processData(string $data, int $limit): string
{
	return substr($data, 0, $limit);
}

class TestClass
{
	public function calculate(int $a, int $b): int
	{
		return $a + $b;
	}

	public function format(string $text, string $prefix): string
	{
		return $prefix . $text;
	}
}
