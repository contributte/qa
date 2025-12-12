<?php declare(strict_types = 1);

// Incorrectly indented object operator
class Example
{

	public function test(): void
	{
		$result = $this
		->method1()
				->method2()
	->method3();

		$other = $this->builder
->where('x', 1)
			->orderBy('id')
	->get();
	}

}
