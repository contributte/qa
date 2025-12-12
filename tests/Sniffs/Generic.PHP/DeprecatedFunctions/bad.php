<?php declare(strict_types = 1);

// Using deprecated functions - violations
// Note: Most deprecated functions have been removed in PHP 8+
// This sniff uses PHP's ReflectionFunction::isDeprecated() to detect them
// at runtime. Functions like utf8_encode() and utf8_decode() were deprecated
// in PHP 8.2 but may now be removed in newer versions.

// As of PHP 8.4+, there may not be many deprecated functions left
// that haven't been removed entirely. This file may show 0 errors
// on modern PHP versions as deprecated functions get removed.
