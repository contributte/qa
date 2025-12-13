<?php declare(strict_types = 1);

// Test: lineLimit=120, absoluteLineLimit=150 - relaxed limits
$shortVariable = 'short';
$mediumLengthVariable = 'This is a medium length string that is under 80 characters but tests the default limit';
$longerVariable = 'This is a longer string value that exceeds eighty characters but stays under one hundred and twenty characters limit';
