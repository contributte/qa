<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\TraitUseDeclaration;

trait FirstTrait
{
}

trait SecondTrait
{
}

class BadExample
{

	use FirstTrait, SecondTrait;

}
