<?php

// Missing strict_types - intentional violation

namespace Tests\Fixtures;

// Long array syntax - violation
$arr = array(1, 2, 3);

// Missing trailing comma - violation
$multiline = [
	'foo',
	'bar'
];

// Implicit array creation - violation
$data['key'] = 'value';

// Spaces around brackets - violation
$spaced = [ 1, 2, 3 ];
