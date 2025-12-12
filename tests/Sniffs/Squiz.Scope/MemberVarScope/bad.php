<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\Scope\MemberVarScope;

class BadExample
{
	var $propertyWithoutVisibility;

	$propertyWithoutKeyword;
}
