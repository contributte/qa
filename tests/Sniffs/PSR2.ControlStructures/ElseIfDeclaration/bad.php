<?php

namespace Tests\Sniffs\PSR2\ControlStructures\ElseIfDeclaration;

/**
 * Bad elseif declarations - using "else if" instead of "elseif"
 */
class BadExample
{

	public function testElseIf(int $value): string
	{
		if ($value > 100) {
			return 'high';
		} else if ($value > 50) {
			return 'medium';
		} else if ($value > 0) {
			return 'low';
		} else {
			return 'zero or negative';
		}
	}

	public function testMultipleElseIf(string $status): int
	{
		if ($status === 'active') {
			return 1;
		} else if ($status === 'pending') {
			return 2;
		} else if ($status === 'suspended') {
			return 3;
		} else if ($status === 'deleted') {
			return 4;
		} else {
			return 0;
		}
	}

	public function testNestedElseIf(int $a, int $b): string
	{
		if ($a > 0) {
			if ($b > 0) {
				return 'both positive';
			} else if ($b < 0) {
				return 'a positive, b negative';
			} else {
				return 'a positive, b zero';
			}
		} else if ($a < 0) {
			return 'a negative';
		} else {
			return 'a zero';
		}
	}

}
