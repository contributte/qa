<?php declare(strict_types = 1);

// Using uppercase keywords - violations
CLASS BadExample
{

	PUBLIC FUNCTION testMethod(): VOID
	{
		IF (true) {
			ECHO 'test';
		} ELSE {
			FOREACH ([1, 2, 3] AS $num) {
				WHILE ($num > 0) {
					BREAK;
				}
			}
		}
	}

}
