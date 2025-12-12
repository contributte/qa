<?php declare(strict_types = 1);

// Not using SAPI functions - correct
function isCli(): bool
{
	return PHP_SAPI === 'cli';
}
