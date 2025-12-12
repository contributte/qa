<?php declare(strict_types = 1);

// Using @ error suppression operator - violation
$file = @fopen('test.txt', 'r');
$result = @file_get_contents('data.json');
