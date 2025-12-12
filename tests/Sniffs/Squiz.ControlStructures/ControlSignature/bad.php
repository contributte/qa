<?php declare(strict_types = 1);

namespace Tests\Sniffs\Squiz\ControlStructures\ControlSignature;

class BadExample
{
	public function process(): void
	{
		$condition = true;
		$value = 5;

		if($condition)
		{
			// code
		}

		if ($condition)
		{
			// code
		}
		else {
			// other code
		}

		if ($condition) {
			// code
		}
		elseif($value > 0)
		{
			// other code
		}

		while($condition){
			// code
		}

		do
		{
			// code
		}
		while ($condition);

		for($i = 0; $i < 10; $i++)
		{
			// code
		}

		try
		{
			// code
		}
		catch (\Exception $e) {
			// handle exception
		}
	}
}
