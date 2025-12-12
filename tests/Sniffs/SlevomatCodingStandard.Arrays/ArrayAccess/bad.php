<?php declare(strict_types = 1);

$array = ['key' => 'value'];
$value = $array[ 'key' ];

$items = [1, 2, 3];
$first = $items[ 0 ];

$nested = ['outer' => ['inner' => 'value']];
$result = $nested[ 'outer' ][ 'inner' ];

$data = ['a' => 1, 'b' => 2];
$data[ 'c' ] = 3;
