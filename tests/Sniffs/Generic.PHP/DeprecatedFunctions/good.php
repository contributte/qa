<?php declare(strict_types = 1);

// Using modern PHP functions - correct
$pattern = '/[a-z]+/';
$result = preg_match($pattern, 'test');

$replaced = preg_replace($pattern, 'replacement', 'test');

// Modern equivalents
$array = explode(',', 'a,b,c');
$string = implode(',', $array);
