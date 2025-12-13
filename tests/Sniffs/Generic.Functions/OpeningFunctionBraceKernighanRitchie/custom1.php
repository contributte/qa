<?php declare(strict_types = 1);

// Test: checkClosures=true - closures are checked
function test() {
	$closure = function () {
		return 1;
	};
}
