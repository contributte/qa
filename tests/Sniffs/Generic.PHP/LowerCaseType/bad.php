<?php declare(strict_types = 1);

// Using uppercase type hints - violation
function processData(String $data, Int $count, Bool $flag): Array
{
	return [$data, $count, $flag];
}

class Example
{

	private String $name;

	private Int $value;

	public function getValue(): Int|Float
	{
		return $this->value;
	}

}
