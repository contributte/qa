<?php

namespace Tests\Sniffs\SlevomatCodingStandard\Classes\SuperfluousExceptionNaming;

class ValidationException extends \Exception
{
}

class InvalidStateException extends \Exception
{
}

class NotFoundException extends \RuntimeException
{
}
