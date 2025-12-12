<?php declare(strict_types = 1);

// Using shell_exec() instead of backticks - correct
$output = shell_exec('ls -la');
$result = shell_exec('whoami');
