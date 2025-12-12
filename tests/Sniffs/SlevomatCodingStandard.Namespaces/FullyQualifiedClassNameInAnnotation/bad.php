<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\FullyQualifiedClassNameInAnnotation;

use DateTime;

/**
 * @param DateTime $date
 */
class BadExample
{

	/**
	 * @var DateTime
	 */
	private $date;

}
