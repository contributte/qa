<?php declare(strict_types = 1);

// Issue #19: Traits are removed from enum
// @link https://github.com/contributte/qa/issues/19
// Test: Enum with traits should pass without errors

namespace Tests\Issue19;

trait EnumValues
{

	/**
	 * @return array<int, int|string>
	 */
	public static function values(): array
	{
		return array_column(self::cases(), 'value');
	}

}

trait EnumNames
{

	/**
	 * @return array<int, string>
	 */
	public static function names(): array
	{
		return array_column(self::cases(), 'name');
	}

}

enum ImageTransform: int
{

	use EnumValues;
	use EnumNames;

	case Fit = 1;

	case Exact = 2;

	case Fill = 3;

	case Stretch = 4;

	case Shrink = 5;

}
