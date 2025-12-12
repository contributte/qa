<?php declare(strict_types = 1);

// Unused parameters - violation
function processData(string $data, int $limit, bool $flag): string
{
	return substr($data, 0, $limit);  // $flag is unused
}

class TestClass
{
	public function calculate(int $a, int $b, int $c): int
	{
		return $a + $b;  // $c is unused
	}

	public function format(string $text, string $prefix, string $suffix): string
	{
		return $prefix . $text;  // $suffix is unused
	}
}
