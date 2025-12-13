<?php declare(strict_types = 1);

// Test: checkClosures=false - closures are not checked
function test() {
	$closure = function ()
	{
		return 1;
	};
}
