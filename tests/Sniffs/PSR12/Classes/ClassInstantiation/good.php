<?php declare(strict_types = 1);

// PSR-12 compliant class instantiation - always use parentheses

$instance = new ClassName();
$instance = new ClassName($arg1, $arg2);
$instance = new \Full\NameSpace\ClassName();
$instance = new ClassName(
	$arg1,
	$arg2,
	$arg3
);

class Test
{
	public function __construct(
		private ClassName $dependency = new ClassName(),
	) {
	}
}
