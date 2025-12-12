<?php

namespace Tests\Sniffs\PSR2\ControlStructures\SwitchDeclaration;

/**
 * Bad switch declarations - incorrect indentation and formatting
 */
class BadExample
{

	public function testBadIndentation(int $value): string
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

	public function testMixedIndentation(string $status): void
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

	public function testNoBreakSpacing(int $code): void
	{
		switch ($code) {
			case 200:$message = 'OK';
				echo $message;
				break;
			case 404:
				$message = 'Not Found';echo $message;
				break;
			default:
				$message = 'Unknown';
				echo $message;break;
		}
	}

}
