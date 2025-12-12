<?php declare(strict_types = 1);

class BadControlSignature
{

	public function test(): void
	{
		$value = 5;

		if($value > 0){
			echo 'positive';
		}elseif($value < 0){
			echo 'negative';
		}else{
			echo 'zero';
		}

		while($value > 0){
			$value--;
		}

		foreach([1, 2, 3] as $item){
			echo $item;
		}
	}

}
