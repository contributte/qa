<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\SuperfluousExceptionNaming;

class ValidationFailed extends \Exception
{
}

class InvalidState extends \Exception
{
}

class NotFound extends \RuntimeException
{
}
