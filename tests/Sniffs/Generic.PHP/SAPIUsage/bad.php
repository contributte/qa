<?php declare(strict_types = 1);

// Using php_sapi_name() - violation
function isCli(): bool
{
	return php_sapi_name() === 'cli';
}
