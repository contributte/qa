<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\EmptyLinesAroundClassBraces;

class BadExampleNoLineAfter
{
	public string $property;

	public function method(): void
	{
	}

}

class BadExampleNoLineBefore
{

	public string $property;

	public function method(): void
	{
	}
}

class BadExampleMultipleLinesAfter
{


	public string $property;

}

class BadExampleMultipleLinesBefore
{

	public string $property;


}
