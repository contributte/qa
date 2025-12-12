<?php

namespace Tests\Sniffs\PSR2\ControlStructures\ElseIfDeclaration;

/**
 * Good elseif declarations - using "elseif" not "else if"
 */
class GoodExample
{

	public function testElseif(int $value): string
	{
		if ($value > 100) {
			return 'high';
		} elseif ($value > 50) {
			return 'medium';
		} elseif ($value > 0) {
			return 'low';
		} else {
			return 'zero or negative';
		}
	}

	public function testMultipleElseif(string $status): int
	{
		if ($status === 'active') {
			return 1;
		} elseif ($status === 'pending') {
			return 2;
		} elseif ($status === 'suspended') {
			return 3;
		} elseif ($status === 'deleted') {
			return 4;
		} else {
			return 0;
		}
	}

	public function testNestedElseif(int $a, int $b): string
	{
		if ($a > 0) {
			if ($b > 0) {
				return 'both positive';
			} elseif ($b < 0) {
				return 'a positive, b negative';
			} else {
				return 'a positive, b zero';
			}
		} elseif ($a < 0) {
			return 'a negative';
		} else {
			return 'a zero';
		}
	}

}
