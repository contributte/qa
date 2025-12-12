<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\TraitUseDeclaration;

trait FirstTrait
{
}

trait SecondTrait
{
}

class GoodExample
{

	use FirstTrait;
	use SecondTrait;

}
