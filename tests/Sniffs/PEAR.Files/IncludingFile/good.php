<?php declare(strict_types = 1);

require_once 'config.php';
include_once 'helpers.php';

class GoodIncludingFile
{

	public function test(): void
	{
		require_once 'file.php';
		include_once 'another.php';
	}

}
