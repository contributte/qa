<?php declare(strict_types = 1);

namespace Tests\Sniffs\SlevomatCodingStandard\Namespaces\FullyQualifiedClassNameInAnnotation;

/**
 * @param \DateTime $date
 * @return \Exception
 */
class GoodExample
{

	/**
	 * @var \ArrayObject
	 */
	private $items;

}
