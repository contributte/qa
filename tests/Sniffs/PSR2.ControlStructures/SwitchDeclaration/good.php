<?php

namespace Tests\Sniffs\PSR2\ControlStructures\SwitchDeclaration;

/**
 * Good switch declarations - proper indentation and formatting
 */
class GoodExample
{

	public function testBasicSwitch(int $value): string
	{
		switch ($value) {
		case 1:
			return 'one';
		case 2:
			return 'two';
		case 3:
			return 'three';
		default:
			return 'other';
		}
	}

	public function testSwitchWithBreak(string $status): void
	{
		switch ($status) {
		case 'active':
			echo 'Active status';
			break;
		case 'pending':
			echo 'Pending status';
			break;
		case 'deleted':
			echo 'Deleted status';
			break;
		default:
			echo 'Unknown status';
			break;
		}
	}

	public function testSwitchWithMultipleStatements(int $code): void
	{
		switch ($code) {
		case 200:
			$message = 'OK';
			echo $message;
			break;
		case 404:
			$message = 'Not Found';
			echo $message;
			break;
		case 500:
			$message = 'Internal Server Error';
			echo $message;
			break;
		default:
			$message = 'Unknown';
			echo $message;
			break;
		}
	}

	public function testSwitchWithFallThrough(int $day): string
	{
		switch ($day) {
		case 1:
		case 2:
		case 3:
		case 4:
		case 5:
			return 'weekday';
		case 6:
		case 7:
			return 'weekend';
		default:
			return 'invalid';
		}
	}

}
