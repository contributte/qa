<?php declare(strict_types = 1);

// Bad spacing around opening brace
$instance = new class{
	public function test(): void
	{
	}
};

// Bad opening brace placement
$instance = new class
{
	public function test(): void
	{
	}
};

// Bad extends/implements spacing
$instance = new class  extends  BaseClass  implements  SomeInterface {
	public function test(): void
	{
	}
};
