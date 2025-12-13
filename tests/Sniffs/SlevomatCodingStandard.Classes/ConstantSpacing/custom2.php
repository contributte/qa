<?php declare(strict_types = 1);

// Test: minLinesCountBeforeWithComment=0 - no line before constant with comment
class TestClass
{

	/** Constant A */
	public const A = 1;
	/** Constant B */
	public const B = 2;

}
