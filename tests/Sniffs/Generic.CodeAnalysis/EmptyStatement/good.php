<?php declare(strict_types = 1);

if (true) {
	echo 'not empty';
}

try {
	doSomething();
} catch (Exception $e) {
	log($e);
}
