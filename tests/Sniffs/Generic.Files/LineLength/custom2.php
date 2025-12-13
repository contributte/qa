<?php declare(strict_types = 1);

// Test: ignoreComments=true - long comments are ignored
// This is a very long comment line that exceeds the default eighty character limit but should be ignored when ignoreComments is enabled because comments are excluded from the check
$short = 'value';
