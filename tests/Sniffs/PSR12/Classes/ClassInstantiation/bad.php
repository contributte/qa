<?php declare(strict_types = 1);

// Missing parentheses
$instance = new ClassName;
$instance = new \Full\NameSpace\ClassName;

class Test
{
	public function __construct(
		private ClassName $dependency = new ClassName,
	) {
	}
}
