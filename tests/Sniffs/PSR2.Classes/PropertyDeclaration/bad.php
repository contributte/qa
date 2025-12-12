<?php

namespace Tests\Sniffs\PSR2\Classes\PropertyDeclaration;

/**
 * Bad property declarations - violates PSR2
 */
class BadExample
{

	// Using var keyword (deprecated)
	var $oldStyleProperty;

	// Multiple properties in one statement
	public $firstName, $lastName;

	// Property without visibility modifier
	$noVisibility;

	// Multiple properties with var
	var $one, $two, $three;

	// Static with multiple properties
	public static $staticOne, $staticTwo;

}
